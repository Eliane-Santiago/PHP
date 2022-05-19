<?php

//Classe Filhas
class Carro extends Veiculo{
    
    public $tetoSolar = true;

    //Metodo Construtor - Usando quando queremos criar os atributos com valores dinâmicos
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

}

//Classe Pai
//SEM MÉTODO SET E GET 
//SEM MÉTODO CONSTRUTOR
class Veiculo{
    public $placa = null;
    public $cor = null;
    


    function acelerar(){
        echo 'Acelerando...';
    }


    function freiar(){
        echo 'Freiando...';
    }

}

//CRIANDO E CHAMANDO A FUNÇÃO DAS CLASSES FILHA CARRO E MOTO
// COM MÉTODO CONSTRUTOR
$carro = new Carro('PUI2356','Cinza');
$moto = new Moto('JIF5669', 'Azul');


//CRIANDO E CHAMANDO A FUNÇÃO PAI
//SEM MÉTODO SET E GET 
//SEM MÉTODO CONSTRUTOR 
$veiculo = new Veiculo();
$veiculo -> placa = "HGJ2546";
$veiculo -> cor = "Branco";



// Só para visualizar o objeto
echo'<pre>';
print_r($carro);
echo'<br/>'; // Quebra de linha
print_r($moto);
echo'<pre />';
echo'<hr>'; // Desenha uma linha


//Chamado a função ou Metodo

$carro -> abrirTetoSolar(); // Executando a função
echo '<br/>';
$carro -> alterarPosicaoVolante(); // Executando a função
echo '<br/>';
$carro -> freiar();

echo'<hr>'; // Desenha uma linha

$moto -> acelerar(); // Executando a função
echo '<br/>';
$moto ->empinar(); // Executando a função
echo '<br/>';
$moto ->freiar();

?>