<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis em PHP</title>
</head>
<body>
    <?php
        /*
        - O php possuí vários tipos, assim como outras linguagens:
            int, float, string, boolean, array...

        - Regras de declaração:
            Devem iniciar com "$"
            Não podem ser iniciadas com espaços ou números
            Não permite utilização de caracteres especiais, com exceção do "_"

        - Não requer(e não suporta) definição explícita de tipo

        - As variáveis são Case Sensitive
            $nome, $Nome, $NOME, $fone1, $fone_2...
        */

        //int
        $vlr_inteiro = 1;

        //float
        $vlr_fracionado = 1.7;

        //boolean
        $estado = true;
        echo $estado;
        echo "<br>";

        //string
        $texto = 'Curso de php';
        echo $texto;
        echo "<br>";

        echo "Curso de PHP - $vlr_fracionado"; //Atenção para como o PHP trata aspas simples e duplas
        echo "<br>";

        echo 'Curso de PHP - $vlr_fracionado'; //Ele trata aspas duplas com mais cuidado, vendo se existem variáveis
        echo "<br>";

        echo 'Curso de PHP'.$vlr_fracionado; //Também podemos concatenar valores dessa forma
        echo "<br>";
    ?>
</body>
</html>