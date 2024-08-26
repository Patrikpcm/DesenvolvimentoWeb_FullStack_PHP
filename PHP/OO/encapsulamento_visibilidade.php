<?php
class Veiculo{
    /*
    Visibilidade
     -public
     -private
     -protected    
    */
    //var $placa; //Ao utilizar var, automáticamente o atributo se torna público
    
    public $placa = '000-000'; //altera tanto dentro quanto fora da classe
    private $cor = 'Preta'; //Altera somente dentro da classe através de métodos públicos
    protected $tipo = 'Caminhonete'; //Altera somente dentro da classe e das classes filhas através de métodos públicos

    //método privado para definir o valor da cor
    public function setCor($cor){ 
        $this->cor = $cor;
    }

    public function getCor(){
        return $this->cor;
    }
}

class Carro extends Veiculo{
    public function exibirTipo(){
        echo $this->tipo.'<br>';
    }
}

$veiculo = new Veiculo();

$carro = new Carro();
$carro->exibirTipo();
$carro->setCor('branco');
echo $carro->getCor().'<br>';

?>