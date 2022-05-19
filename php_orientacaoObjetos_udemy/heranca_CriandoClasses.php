<?php

//Classe Filhas
class Carro{

    //Atributos - Valores fixos
    public $placa = 'ABC1234';
    public $cor = 'Branco';
    public $tetoSolar = true;

    function acelerar(){
        echo 'Acelerando...';
    }

    function abrirTetoSolar(){
        echo 'Abrir Teto Solar';
    }

    function alterarPosicaoVolante(){
        echo 'Alterar Posição do Volante';
    }
}

//Classe Filhas
class Moto{
    public $placa = 'FGT1234';
    public $cor = 'Vermelha';
    public $contraPesoGuidao = true;


    function acelerar(){
        echo 'Acelerando...';
    }


    function empinar(){
        echo 'Empinando...';
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

}

//Criando o objeto
$carro = new Carro();
$moto = new Moto();

echo'<pre>';
print_r($carro);
echo'<br/>'; // Quebra de linha
print_r($moto);
echo'</pre>';
echo'<hr>'; // Desenha uma linha


//Chamado a função ou Metodo

echo '<br/> Carro: ' . $carro -> acelerar();
echo '<br/> Carro: ' . $carro -> abrirTetoSolar();
echo '<br/> Carro: ' . $carro -> alterarPosicaoVolante();


echo '<br/> Moto: ' . $moto -> acelerar();
echo '<br/> MOto: ' . $moto ->empinar()


/*
>>> TERMO DE USADOS PARA A RELAÇÃO DE HERANÇA
- CLASSE PAI E CLASSE FILHAS
- SUPERCLASSE E SUBCLASSES
- CLASSE GENERICA E CLASSES ESPECIALIZADAS
*/

?>