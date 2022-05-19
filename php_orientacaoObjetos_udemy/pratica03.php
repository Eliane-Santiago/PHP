<?php

/*
Faça um	programa para controle de empréstimo de	livros,	com	as classes Emprestimo, Livro e Pessoa.
*/

class Pessoa{

    public $nome = null;
    public $cpf = null;
    public $telefone = null;
    public $email = null;


    function __construct($nome, $cpf, $telefone, $email){
        $this -> nome = $nome;
        $this -> cpf = $cpf;
        $this -> telefone = $telefone;
        $this -> email = $email;
    }

    
    function __set($atributo,$valor){
        $this -> $atributo = $valor;
    }
    

    function __get($atributo){
        return $this -> $atributo;
    }
    
}

$eliane = new Pessoa('Eliane Santiago', '23659841789', '85999885566','eliane@gmail.com');

echo '<br/>';

echo '<pre>';
print_r ($eliane);
echo '</pre>';



?>