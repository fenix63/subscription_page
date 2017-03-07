<?php

//31.220.16.17    mysql.hostinger.ru
$host = 'localhost:8080'; // адрес сервера
$database = 'hhm'; // имя базы данных
$user = '	fenix'; // имя пользователя
$password = '509912'; // пароль


// подключаемся к серверу
$link = mysqli_connect($host, $user, $password, $database);

// выполняем операции с базой данных
//$query ="SELECT * FROM card";
//$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

if(!$link)
{
    echo "Error";
}


// закрываем подключение
mysqli_close($link);


?>