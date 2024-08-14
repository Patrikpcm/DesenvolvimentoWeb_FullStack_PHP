<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../BOOTSTRAP/css/bootstrap.min.css" rel="stylesheet">
    <title>Processamento de formulários - $_POST</title>
</head>
<body>
    <div class="container">

        <div class="row">
            <h1>Detalhes do produto</h1>
        </div>
        <div class="row">
            <div class="col-md-4">
                <?php

                    $id_produto = $_POST['id_produto']; //recuperando o produto selecionado

                    $detalhes[1] = 'Detalhes da cadeira';
                    $detalhes[2] = 'Detalhes do fogão';
                    $detalhes[3] = 'Detalhes do roteador';
                    $detalhes[4] = 'Detalhes do notebook ';
                    $detalhes[5] = 'Detalhes do celular';

                    echo $detalhes[$id_produto]; //dando um echo no array que contém a info do produto
                ?>
            </div>
        </div>
    </div>

    <?php
    
    ?>
</body>
</html>