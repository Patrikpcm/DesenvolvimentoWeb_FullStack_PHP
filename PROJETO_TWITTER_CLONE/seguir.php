<?php
    session_start();

    //primeiro nível de controle para garantir que um usuário não autenticado publique tweets.
    //Dessa forma iremos garantir que o usuário esteja logado.
    if(!isset($_SESSION['usuario'])){ 
        header('Location: index.php?erro=1'); //forçando o usuário para página de login com um erro embutido
    }

    require_once('db.class.php');

    $id_usuario = $_SESSION['id_usuario'];
    $seguir_id_usuario = $_POST['seguir_id_usuario'];

    if($id_usuario != '' || $seguir_id_usuario == ''){
        die();
    }
    $objDb = new db(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $sql = "INSERT INTO usuarios_seguidores(id_usuario, seguindo_id_usuario) VALUES ($id_usuario, $seguir_id_usuario)";

    mysqli_query($link, $sql);

    
?>