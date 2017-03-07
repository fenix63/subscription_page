'use strict';

var gulp = require('gulp'),
    prefixer = require('gulp-autoprefixer'),
    uglify = require('gulp-uglify'),
    watch = require('gulp-watch'),
    sass = require('gulp-sass'),
    html = require('gulp-minify-html'),
    rigger = require('gulp-rigger'),
    cssmin = require('gulp-minify-css'),
    imagemin = require('gulp-imagemin'),
    pngquant = require('imagemin-pngquant'),
    browserSync = require('browser-sync'),
    jade = require('gulp-jade'),
    reload = browserSync.reload;

var path = {
    public: {
        html:'public/',
        js:'public/js/',
        css:'public/css/',
        img:'public/images/'
    },

    private:{
        jade: 'private/*.jade',
        html:'private/html/**/*.html',
        js:'private/js/bundle.js',
        css:'private/css/bundle.sass',
        img:'private/images/**/*.*'
    },

    watch: {
        jade: 'private/*.jade',
        html:'public/**/*.html',
        js: 'private/js/**/*.js',
        css: 'private/css/**/*.sass',
        img: 'private/images/**/*.*'
    }
}

var config = {
    server: {
        baseDir: './public'
    },
    tunnel: false,
    host: 'localhost',
    port: 9000,
    logPrefix: 'frontend_test'
};


gulp.task('jade', function() {
    gulp.src('private/*.jade')
        .pipe(jade({
            locals: '',
            pretty: true
        }))
        .pipe(gulp.dest('public/'))
        .pipe(reload({stream:true}));
});


gulp.task('js:build', function(){
   gulp.src(path.private.js)
       .pipe(rigger())
       .pipe(uglify())
       .pipe(gulp.dest(path.public.js))
       .pipe(reload({stream:true}));
});

gulp.task('css:build', function(){
   gulp.src(path.private.css)
       .pipe(sass())
       .pipe(prefixer())
       .pipe(cssmin())
       .pipe(gulp.dest(path.public.css))
       .pipe(reload({stream:true}));
});

gulp.task('image:build', function(){
   gulp.src(path.private.img)
       .pipe(imagemin({
           progressive:true,
           svgoPlugins: [{removeViewBox: false}],
           use: [pngquant()],
           interlaced:true
       }))
       .pipe(gulp.dest(path.public.img))
       .pipe(reload({stream:true}));
});

gulp.task('html:build', function(){
   gulp.src(path.watch.html)
       .pipe(reload({stream:true}));
});

gulp.task('build',[
    'jade',
   'js:build',
    'css:build',
    'image:build',
    'html:build'
]);

gulp.task('watch', function(){
    gulp.watch('private/*.jade',['jade']);//отслеживание jade файлов

    watch([path.watch.html], function () {
       gulp.start('html:build');
   });

    watch([path.watch.css], function () {
        gulp.start('css:build');
    });

    watch([path.watch.js], function () {
        gulp.start('js:build');
    });

    watch([path.watch.img], function () {
        gulp.start('image:build');
    });


});

gulp.task('webserver', function(){
    browserSync(config);
});

gulp.task('default',['build','watch', 'webserver']);