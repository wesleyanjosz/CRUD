<?php
session_start();
require_once './db-connect.php';

if (isset($_POST['btn-cadastrar'])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);

    $sql = "insert into clientes(nome, sobrenome, email, idade) values ('$name', '$lastname', '$email', '$age')";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Cadastrado com sucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao cadastrar!';
        header('Location: ../index.php');
    }
}
