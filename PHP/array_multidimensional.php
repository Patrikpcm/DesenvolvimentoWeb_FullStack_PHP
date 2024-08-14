<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array multidimensional em PHP</title>
</head>
<body>
    <?php
        //tabuleiro de xadrez
        $tabuleiro[8]['a'] = 'Torre Preta';
        $tabuleiro[8]['b'] = 'Bispo Preta';
        $tabuleiro[8]['c'] = 'Cavalo Preta';
        $tabuleiro[8]['d'] = 'Rainha Preta';
        $tabuleiro[8]['e'] = 'Rei Preta';
        $tabuleiro[8]['f'] = 'Bispo Preta';
        $tabuleiro[8]['g'] = 'Cavalo Preta';
        $tabuleiro[8]['h'] = 'Torre Preta';

        $tabuleiro[7]['a'] = 'Peão Preta';
        $tabuleiro[7]['b'] = 'Peão Preta';
        $tabuleiro[7]['c'] = 'Peão Preta';
        $tabuleiro[7]['d'] = 'Peão Preta';
        $tabuleiro[7]['e'] = 'Peão Preta';
        $tabuleiro[7]['f'] = 'Peão Preta';
        $tabuleiro[7]['g'] = 'Peão Preta';
        $tabuleiro[7]['h'] = 'Peão Preta';

        $tabuleiro[1]['a'] = 'Torre Branca';
        $tabuleiro[1]['b'] = 'Bispo Branca';
        $tabuleiro[1]['c'] = 'Cavalo Branca';
        $tabuleiro[1]['d'] = 'Rainha Branca';
        $tabuleiro[1]['e'] = 'Rei Branca';
        $tabuleiro[1]['f'] = 'Bispo Branca';
        $tabuleiro[1]['g'] = 'Cavalo Branca';
        $tabuleiro[1]['h'] = 'Torre Branca';

        $tabuleiro[2]['a'] = 'Peão Branca';
        $tabuleiro[2]['b'] = 'Peão Branca';
        $tabuleiro[2]['c'] = 'Peão Branca';
        $tabuleiro[2]['d'] = 'Peão Branca';
        $tabuleiro[2]['e'] = 'Peão Branca';
        $tabuleiro[2]['f'] = 'Peão Branca';
        $tabuleiro[2]['g'] = 'Peão Branca';
        $tabuleiro[2]['h'] = 'Peão Branca';
    
        print_r($tabuleiro);
        print '<br>';

        print $tabuleiro[8]['d'];
        print '<br>';

        print $tabuleiro[8]['g'];
        print '<br>';

        print $tabuleiro[8]['b'];
        print '<br>';

        /*
        EM PHP É POSSÍVEL CRIAR ARRAYS DE MULTIPLAS DIMENSOES
        */
        $dimensao[1][1] = array([1][1]=>array('...')); //E assim sucessivamente
    ?>
</body>
</html>