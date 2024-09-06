<?php
    session_start();

    //primeiro nível de controle para garantir que um usuário não autenticado publique tweets.
    //Dessa forma iremos garantir que o usuário esteja logado.
    if(!isset($_SESSION['usuario'])){ 
        header('Location: index.php?erro=1'); //forçando o usuário para página de login com um erro embutido
    }

    require_once('db.class.php');

    $id_usuario = $_SESSION['id_usuario'];
    $texto_tweet = $_POST['texto_tweet'];

    if($texto_tweet != '' && $id_usuario != ''){

        $objDb = new db(); //criando um novo objeto
        $link = $objDb->conecta_mysql();

        $sql = "INSERT INTO tweet(id_usuario, tweet) VALUES ($id_usuario, '$texto_tweet')";

        mysqli_query($link, $sql);

    }    
    /*
    Para verificar se o usuário esta logado e o tweet não é vazio,
    eu também poderia verificar se alguma das variáveis é vazia e dar um die() na aplicação.
    Essa seria uma forma diferente de verificação da que realizada acima.
    
    if($texto_tweet == '' || $id_usuario == '')
        die();
    */
    
?>