<?php

require_once './db-connect.php';

if (isset($_POST['btn-cadastrar'])) {
    $name = mysqli_escape_string($connect, $_POST['name']);
    $lastname = mysqli_escape_string($connect, $_POST['lastname']);
    $email = mysqli_escape_string($connect, $_POST['email']);
    $age = mysqli_escape_string($connect, $_POST['age']);
    
    $sql = "insert into clientes(nome, sobrenome, email, idade) values ('$name', '$lastname', '$email', '$age')";

    if (mysqli_query($connect, $sql))
        header('Location: ../index.php ? sucesso');
    else 
        header('Location: ../index.php ? erro');
}

?>