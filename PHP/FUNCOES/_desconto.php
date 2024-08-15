
<?php

require_once('funcao_desconto.php');

$valor_total = 800;
$desconto= 10;
$valor_descontado = calcula_desconto($valor_total,$desconto);

echo "Valor total: R$ $valor_total <br>";
echo "Valor desconto: $desconto% <br>";
echo "Valor total com desconto: R$ $valor_descontado";

?>