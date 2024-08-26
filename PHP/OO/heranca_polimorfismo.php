<?php

//Classe mãe ou superclasse
class Felino{
    var $mamifero = 'sim';
    
    function correr(){
        echo 'Correr como um felino <br><br>';
    }
}

//classe filha ou subclasse
class Cheeta extends Felino{
    //polimorfismo
    function correr(){
        echo 'Correr como um cheeta(a 100km/h)';
    }
}


$cheeta = new Cheeta();
echo $cheeta->mamifero.'<br>';
$cheeta->correr().'<br>';


?>