<?php

    session_start(); //recuperando as variáveis de sessão

    unset($_SESSION['usuario']); //desreferenciando as variáveis
    unset($_SESSION['email']); //desreferenciando as variáveis

    if (!isset($_SESSION['usuario'])){ //redirecionando o usuário para a index
        header('Location: index.php');
    }

?>