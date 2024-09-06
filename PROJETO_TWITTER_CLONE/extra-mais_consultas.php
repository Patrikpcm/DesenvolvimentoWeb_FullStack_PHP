<?php

    require_once('db.class.php');

    //recuperando todos os registros da tabela usuários
    $sql = "SELECT * FROM usuarios ";

    $objDb = new db();
    $link = $objDb->conecta_mysql();
   
    $resultado_id = mysqli_query($link, $sql);

    if($resultado_id){
        $dados_usuario = mysqli_fetch_array($resultado_id);
        //Temos um problema no uso do mysql_fetch_array dessa forma pois ele retorna apenas a primeira ocorrencia da pesquisa no BD, e não todas as informações como definido na busca.
        var_dump($dados_usuario); //retorna com todas as informações possíveis do registro no BD, tanto numérico quanto associativo
        echo '<br>';
        var_dump($dados_usuario, MYSQLI_NUM); //retorna o registro apenas com indíces núméricos
        echo '<br>';
        var_dump($dados_usuario, MYSQLI_ASSOC); //retorna o registro com o valor associativo (nome do campo no BD)


        //criando uma estrutura de array para recuperar todos os dados do BD.
        $dados_usuario2 = array();
        while($linha = mysqli_fetch_array($resultado_id, MYSQLI_ASSOC)){ //a cada iteração do fetch_array o contador avança uma linha no bd, automaticamente.
            $dados_usuario2[] = $linha;
        }

        foreach($dados_usuario2 as $usuario){
            //var_dump($usuario);
            echo $usuario['email'];
            echo '<br>';
        }
    }
    else{
        echo "Erro na execução da consulta, favor entrar em contato com o admin do site.";
    }
    
?>