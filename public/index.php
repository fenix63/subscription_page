
<html>
  <head>
    <title>hhm - тестовое задание</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <link rel="stylesheet" href="css/bundle.css"/>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/add_card.js"></script>
  </head>
</html>
<body>
  <div class="top_part">
    <div class="container">
      <div class="row logo">
        <div class="col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs offset-1"><img src="images/logo_min2.png" alt=""/></div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-lg-offset-3"><img src="images/mail_min.png" alt=""/></div>
      </div>
      <div class="row">
        <form role="form">
          <div class="col-lg-3 col-lg-offset-1">
            <div class="form-group">
              <label for="exampleInputEmail1">Имя*</label>
              <div class="clearfix"></div>
              <input type="text" id="exampleInputEmail1" placeholder="" class="form-control"/>
            </div>
            <div class="clearfix"></div>
            <div class="form-group">
              <label for="exampleInputEmail1">E-Mail*</label>
              <div class="clearfix">
                <input type="email" id="exampleInputEmail1" placeholder="" class="form-control"/>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-lg-offset-0 col-md-3 col-md-offset-1 comment_block">
            <div class="form-group">
              <label for="comment">Комментарий*</label>
              <div class="clearfix"></div>
              <textarea name="comment" cols="30" rows="6"></textarea>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-lg-2 col-lg-offset-6">
          <button type="submit">Записать</button>
        </div>
      </div>
    </div>
  </div>
  <div class="bottom_part">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-lg-offset-4">
          <h3>Выводим комментарии</h3>
        </div>
      </div>
    </div>
  </div>
  <?php
  include 'php/connect.php';
  ?>
  <footer>
    <div class="container">
      <div class="row logo">
        <div class="col-lg-2 col-lg-offset-1 col-md-3 col-md-offset-1 col-sm-3 col-sm-offset-1 col-xs-3 col-xs offset-1"><img src="images/logo_min2.png" alt=""/></div>
        <div class="col-lg-2"><img src="images/vk.png" alt=""/></div>
      </div>
    </div>
  </footer>
</body>