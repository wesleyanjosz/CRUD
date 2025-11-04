<?php

$servername = 'localhost';
$username = 'root';
$password = '89lBY$44s]dh&M1L';
$dbname = 'crud';

$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');

if (mysqli_connect_error()) {
    echo 'Erro na conexão: '.mysqli_connect_error();
}

?>