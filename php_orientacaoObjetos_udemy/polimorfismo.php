<?php

// Polimorfismo é a subrescrita do método


//Classe Filhas
class Carro extends Veiculo{
    
    public $tetoSolar = true;

    //Metodo Construtor
    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
        
        /*
        $carroGol = new carro($placa, $cor); //  $carroGol = new carro('YUT5896', 'Verde');
        */
    }
    

    function abrirTetoSolar(){
        echo 'Abrir Teto Solar';
    }

    function alterarPosicaoVolante(){
        echo 'Alterar Posição do Volante';
    }
}

//Classe Filhas
class Moto extends Veiculo{

    public $contraPesoGuidao = true;

    //Metodo Construtor
    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar(){
        echo 'Empinando...';
    }

    // Polimorfismo é a subrescrita do método
    // Esse método está na classe pai porém teve que ser alterado para a classe moto
    function trocarMarcha(){
        echo'Desengatar embreagem com a mão e engatar marcha com o pé';
    }

}

//Classe Filhas
class Caminhao extends Veiculo{
    //Metodo Construtor
    function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }
}

//Classe Pai
class Veiculo{
    public $placa = null;
    public $cor = null;
    


    function acelerar(){
        echo 'Acelerando...';
    }


    function freiar(){
        echo 'Freiando...';
    }

    function trocarMarcha(){
        echo'Desengatar embreagem com a pé e engatar marcha com a mão';
    }

}

//Criando o objeto
$carro = new Carro('PUI2356','Cinza');
$moto = new Moto('JIF5669', 'Azul');
$caminhao = new Caminhao('POU5659', 'Vermelho');

//Chamando Metodos
$carro -> trocarMarcha();
echo '<br/>';
$moto -> trocarMarcha();
echo '<br/>';
$caminhao -> trocarMarcha();






?>