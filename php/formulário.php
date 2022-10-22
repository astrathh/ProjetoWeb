<?php

    if(isset($_POST['submit']))
    {
        // print_r('Nome: ' . $_POST['nome']);
        // print_r('<br>');
        // print_r('Email: ' . $_POST['email']);
        // print_r('<br>');

        include_once('config.php');

        $nome = $_POST['nome'];
        $email = $_POST['usuario'];
        $senha = $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,usuario,senha) 
        VALUES ('$nome','$usuario','$senha')");

        header('Location: login.php');
    }

?>