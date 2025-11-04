<?php

// $servername = ''; //local do banco de dados
// $username = ''; // usuário do banco de dados
// $password = ''; // senha do banco de dados
// $dbname = ''; // nome do banco de dados

$connect = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($connect, 'utf8');

if (mysqli_connect_error()) {
    echo 'Erro na conexão: '.mysqli_connect_error();
}

?>