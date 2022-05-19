<?php

/*
>>> Operadores de Visibilidade (Processo de Herança)
- Public: Pode ser Herdado
- Private: Não Pode ser Herdado
- Protected: Pode ser Herdado
*/

class Pai {
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    public function setNome($value){
        $this->nome=$value;
    }

    public function getNome(){
        return $this->nome;
    }

    
    //Metódos Mágicos
    public function __get($attr){
        return $this->$attr;
    }

    public function __set($attr, $value){
        $this->$attr=$value;
    }


    private function executarMania(){
        echo 'Assoviar';
    }

    private function reponder(){
        echo 'oi';
    }

    private function executarAcao(){
        echo 'Assoviar';
    }

}

$pai = new Pai();

echo $pai->getNome();
$pai-> setNome('Eliane');

echo'<br/>';
echo $pai -> sobrenome;










?>