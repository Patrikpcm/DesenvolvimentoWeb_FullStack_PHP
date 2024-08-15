<?php

function calcula_desconto($valor_total, $desconto){
    $valor_desconto = $valor_total * ($desconto/100);
    return ($valor_total - $valor_desconto);
}

?>