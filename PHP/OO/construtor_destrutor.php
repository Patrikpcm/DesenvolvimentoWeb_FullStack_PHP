<?php

class Pessoa{
    private $nome;

    function __construct($nome){
        echo 'Construtor iniciado<br>';
        $this->nome = $nome;
        echo 'Nome: ' . $this->nome .'<br>';
    }

    function __destruct(){
        echo 'Objeto destruído!';
    }

    public function correr(){
        echo $this->nome.' esta correndo!<br>';
    }

}

$pessoa = new Pessoa('Joaquim');
$pessoa->correr();

?>