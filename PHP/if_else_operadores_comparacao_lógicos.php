<!--
OPERADORES DE COMPARAÇÃO
==      -   igualdade
===     -   Idêntico (valores iguais e do mesmo tipo)
!=      -   Diferente
<>      -   Diferente
!==     -   Não idêntico (valores diferentes e tipos diferentes)
<       -   Menor que 
>       -   Maior que
<=      -   Menor igual
>=      -   Maior igual

OPERADORES LÓGICOS
AND     -   E
&&      -   E 
OR      -   OU
||      -   OU
XOR     -   Xor (Verdadeiro apenas se uma das expressões for verdadeira)
!       -   Negação (Inverte o resultado da expressão)
-->

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if/else e operadores de comparação</title>
</head>
<body>
    <?php
        if(2 == 2)
            echo 'Sim, 2 é igual a 2';
        else
            echo 'Não, os valores não são iguais';

        if (2 === '2')
            echo 'Sim, 2 é igual a \'2\'';
        else
            echo 'Não, os valores não são iguais';
        
    ?>
</body>
</html>
