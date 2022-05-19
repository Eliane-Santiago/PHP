<?php

/*
Faça um programa de agenda telefônica, com as classes Agenda e Contato
*/


class Agenda{
    public $contatos = null;
  

    public function __construct(Contato $contatos){
        $this->contatos = $contatos;
    }

    public function exibirAgenda(){
        return $this -> contatos;
    }

}

class Contato {
    public $nome = null;
    public $telefone = null;
    public $email= null;


    public function __construct($nome, $telefone, $email){
        $this->nome = $nome;
        $this->telefone = $telefone;
        $this->email = $email;
    }

    function __set($atributo, $valor){
        $this->$atributo = $valor;
    }

    function __get($atributo){
        return $this->$atributo;
    }

    public function exibirContato(){
        return "Nome: ". $this->__get('nome') . "<br/> Telefone: " . $this->__get('telefone') . "<br/> email: " . $this->__get('email');
    }

}

$contato1 = new Contato('Eliane', '85988520541', '1010eliane1010@gmail.com');

//Alterando o número de telefone
$contato1->__set('telefone','8599886655');

//echo $contato1 -> exibirContato();

echo "<br/>";
$agenda1 = new Agenda($contato1);

 echo $agenda1->contatos->nome;




?>