<?php
session_start();
require_once './db-connect.php';

if (isset($_POST['btn-editar'])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);
    $id = mysqli_escape_string($connect, $_POST['id']);
    
    $sql = "update clientes set nome = '$name', sobrenome = '$lastname', email = '$email', idade = '$age' where id = '$id'";

    if (mysqli_query($connect, $sql)) {
        $_SESSION['msg'] = 'Atualizado com sucesso!';
        header('Location: ../index.php');
    } else {
        $_SESSION['msg'] = 'Erro ao atualizar!';
        header('Location: ../index.php');
    }
}

?>