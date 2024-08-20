<?php
/*
  is_array()    -   Verifica se uma variável é um array(true/false)
  in_array()    -   Verifica se um valor existe em um array (true/false)
  array_keys()  -   Retorna todas as chaves de um array 
  sort()        -   Ordena um array sem manter a associação chave=>valor
  asort()       -   Ordena um array mantendo a associação chave=>valor
  count()       -   Conta elementos de um array
  array_merge() -   Funde um ou mais arrays
  explode()     -   Divide uma string baseada em um delimitador, criando um array
  implode()     -   Junta elementos de um array eum uma string
*/

//is_array
$array = 'String';
if (is_array($array)){ //False, não é um array
    echo 'Verdadeiro.<br>';
} 
else{
    echo 'False.<br>';
}

$array = array();
if (is_array($array)){ //True, é um array mesmo que vazio
    echo 'Verdadeiro.<br><br>';
} 
else{
    echo 'False.<br>';
} 


//in_array
$array = array('mac','linux','windows');
if (in_array('mac',$array)){ //True, contém mac
    echo 'Contém.<br><br>';
} 
else{
    echo 'Não contém.<br>';
} 


//array_keys
$array = array(10=>'mac', 11=>'windows',12=>'linux');
var_export($array);
echo ' -> var_export. <br>';

var_export(array_keys($array));
echo ' -> var_export de array_keys.<br><br>';


//sort
$frutas = array(0=>'banana', 1=>'amora', 2=>'laranja', 3=>'carambola');
var_export($frutas);
echo '<br>';
sort($frutas);
var_export($frutas);
echo ' -> elementos ordenados com sort().<br><br>';


//asort
$frutas = array(0=>'banana', 1=>'amora', 2=>'laranja', 3=>'carambola');
var_export($frutas);
echo '<br>';
asort($frutas);
var_export($frutas);
echo ' -> elementos ordenados com asort().<br><br>';


//count
echo count($frutas).'<br><br>';


//array_merge
$array1 = array('mac', 'linux');
$array2 = array('windows');
$array3 = array('solaris');

$merge = array_merge($array1, $array2);
var_export($merge);
echo '<br>';
$merge = array_merge($array1, $array2, $array3);
var_export($merge);
echo '<br><br>';


//explode
$string = '20/10/2024';
$retorno = explode('/', $string);
var_export($retorno);
echo '<br><br>';


//implode
$string = implode('/',$retorno);
echo ($string);

?>