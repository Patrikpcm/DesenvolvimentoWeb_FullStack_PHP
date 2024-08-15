<?php

require_once('login.php');

$login = $_POST['login'];
$senha = $_POST['senha'];

function valida_login($login, $senha){
    if ($login == 'usuario' && $senha == 1234){
        echo 'Login autorizado!';
    }
    else{
        echo 'Login incorreto!';
    }
}

valida_login($login, $senha);

?>