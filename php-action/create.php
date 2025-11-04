<?php
session_start();
require_once './db-connect.php';

function clear($input) {
    global $connect;
    $var = mysqli_escape_string($connect, $input);
    $var = htmlspecialchars($var);
    return $var;
}

if (isset($_POST['btn-cadastrar'])) {
    $name = clear($_POST['name']);
    $lastname = clear($_POST['lastname']);
    $email = clear($_POST['email']);
    $age = clear($_POST['age']);

    $sql = "insert into clientes(nome, sobrenome, email, idade) values ('$name', '$lastname', '$email', '$age')";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Cadastrado com sucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao cadastrar!';
        header('Location: ../index.php');
    }
}
