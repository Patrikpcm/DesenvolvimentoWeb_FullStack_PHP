<?php
    //incluindo a classe db para ser usado no registro
    require_once('db.class.php');

    $usuario = $__POST['usuario'];
    $email = $__POST['email'];
    $senha = $__POST['senha'];

    $objDb = new db(); //criando um novo objeto
    $link = $objDb->conecta_mysql(); //conectando ao bd

    //criar nossa query de inserção
    $sql = "insert into usuarios(usuario, email, senha) values ('$usuario', '$email', '$senha');";

    //executar a query criada
    if (mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
    }
    else{
        echo "Erro ao registrar o usuário";
    }
?>