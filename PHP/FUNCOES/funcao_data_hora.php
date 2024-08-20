<?php
/*
date()      - Y=>2024 | y=>24 - m - d - h(12horas) | H(24horas) - i(minutos)
strtotime() - 
*/

echo date("d/m/Y").'<br>';
echo date("d-m-y").'<br>';

echo date("d/m/Y h:i").'<br>';
echo date("d/m/Y H:i").'<br>';

$data_inicial = '2024-04-02';
$data_final = '2024-04-05';
echo($data_inicial).'<br>';
echo($data_final).'<br>';

echo(strtotime($data_inicial)).'<br>'; //retorna o tempo em segundos

echo (strtotime($data_final) - strtotime($data_inicial)).' Segundos de diferença<br>';
echo ((strtotime($data_final) - strtotime($data_inicial))/86400).' Dias de diferença <br>';
?>