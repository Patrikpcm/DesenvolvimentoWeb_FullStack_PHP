<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comando Switch</title>
</head>
<body>

<?php

    $opcao = 2;
    switch($opcao){
        case 1:
            echo 'A opção selecionada foi a 1';
            break;
        
        case 2:
            echo 'A opção selecionada foi a 2';
            break;
        
        case 3:
            echo 'A opção selecionada foi a 3';
            break;
        
        default:
            echo 'Nenhuma opção selecionada';
            break;
    }   

?>
    
</body>
</html>