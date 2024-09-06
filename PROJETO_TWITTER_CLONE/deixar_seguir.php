<?php
    session_start();

    //primeiro nível de controle para garantir que um usuário não autenticado publique tweets.
    //Dessa forma iremos garantir que o usuário esteja logado.
    if(!isset($_SESSION['usuario'])){ 
        header('Location: index.php?erro=1'); //forçando o usuário para página de login com um erro embutido
    }

    require_once('db.class.php');

    $id_usuario = $_SESSION['id_usuario'];
    $deixar_seguir_id_usuario = $_POST['deixar_seguir_id_usuario'];

    if($id_usuario != '' || $deixar_seguir_id_usuario == ''){
        die(); //se uma das informações não estiver preenchida, terminamos o processo
    }
    $objDb = new db(); //criando um novo objeto
    $link = $objDb->conecta_mysql();

    $sql = "DELETE FROM usuarios_seguidores WHERE id_usuario = $id_usuario AND seguindo_id_usuario = $deixar_seguir_id_usuario)";

    mysqli_query($link, $sql);

    
?>