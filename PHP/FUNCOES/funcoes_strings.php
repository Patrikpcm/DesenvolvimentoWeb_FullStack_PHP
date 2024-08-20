<?php
/*
strtlower   - converse strings em minúsculas
strtoupper   - converte strings em maiúsculas
ucfirst     - Altera somente a Primeira letra de uma string para maiúscula (não mexe no restante da string)
strlen      - Retorna o tamanho da string
str_replace - Substituir valores na string (É case sensitive)
substr      - Seleciona uma substring dentro da string
*/


$texto = "Curso Completo de PHP.";
echo strtolower($texto).'<br>';

echo strtoupper($texto).'<br>';

$texto = 'cachorro da COR MARROM e da PaTa brancA!';
echo ucfirst($texto).'<br>';

echo strlen($texto).'<br>';

echo str_replace("MARROM","PRETA",$texto).'<br>';
echo str_replace("pata","pErNa",$texto).'<br>';//nada acontece, pois a função é case sensitive

echo substr($texto,2,5); //seleciono 5 caracteres a partir da posição 2.
?>