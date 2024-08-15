<?php
//isset - Verifica se uma variável foi iniciada (tem qualquer valor diferente de nulo).
//$valor = null; //não iniciada
//$valor = 1; //iniciada!
$valor; //não iniciada
if ( isset($valor)){
    echo 'Variável iniciada';
}
else{
    echo 'Variável NÃO iniciada';
}

//empty - qualquer variável que "contenha": '', 0, '0', false, null, array() => nesses casos empty retorna TRUE
$valor = '0';
if (empty($valor)){
    echo 'Variável vazia';
}
else{
    echo 'Variável não vazia';
}

//is_numeric - retorna true ou false ao verificar se uma variável contém um valor númerico, seja string ou número
$valor = 'texto';
if(is_numeric($valor)){
    echo 'A variável contém valor numérico!';
}
else{
    echo 'A variável não é numérica!';
}

?>