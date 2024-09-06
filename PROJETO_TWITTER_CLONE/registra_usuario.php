<?php
    //incluindo a classe db para ser usado no registro
    require_once('db.class.php');

    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $senha = md5($_POST['senha']); //criptografia da senha utilizando o método de mão única md5 que gera um hash de 32 posições

    $usuario_existe = false;
    $email_existe = false;

    $objDb = new db(); //criando um novo objeto
    $link = $objDb->conecta_mysql(); //conectando ao bd

    //VERIFICAR SE O USUÁRIO JÁ EXISTE NO BD
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'"; //query de pesquisa
    if ($resultado_id = mysqli_query($link, $sql)){ //pesquisando e retornando o valor da pesquisa para a variável
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if (isset($dados_usuario['usuario'])){
            //echo 'Usuário já cadastrado <br>';
            $usuario_existe = true;
        }//else{
           // echo 'Usuário não existe, pode ser utilizado<br>';
        //}
    }
    else{
        echo 'Erro na consulta ao BD';
    }

    //VERIFICAR SE O EMAIL JÁ EXISTE NO BD
    $sql = "SELECT * FROM usuarios WHERE email = '$email'"; //query de pesquisa
    if ($resultado_id = mysqli_query($link, $sql)){ //pesquisando e retornando o valor da pesquisa para a variável
        $dados_usuario = mysqli_fetch_array($resultado_id);
        if (isset($dados_usuario['email'])){
            //echo 'Email já cadastrado<br>';
            $email_existe = true;
        }//else{
           // echo 'Email não cadastrado, pode ser utilizado<br>';
        //}
    }
    else{
        echo 'Erro na consulta ao BD';
    }

    //verificando se o usuário já existe no bd
    if($usuario_existe || $email_existe){
        
        $retorno_get = '';
        
        if($usuario_existe){
            $retorno_get.="erro_usuario=1&"; //& serve para separar/delimitar variáveis e seus valores
        }

        if($email_existe){
            $retorno_get.="erro_email=1&"; 
        }

        header('Location: inscrevase.php?'.$retorno_get); //forçando ir para a página inscrevase concatenando com erro
        
        die(); //interrompe o processamento, para não registrar o usuário no banco. Abaixo do die() nada é executado.
    }    

    //criar nossa query de inserção
    $sql = "INSERT INTO usuarios(usuario, email, senha) VALUES ('$usuario', '$email', '$senha')";

    //executar a query criada
    if (mysqli_query($link, $sql)){
        echo "Usuário registrado com sucesso!";
        header('Location: index.php?registrado=1');
    }
    else{
        echo "Erro ao registrar o usuário";
    }
?>