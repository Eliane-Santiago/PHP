<?php 

	//Modelo - Criação da Classe

	class Funcionario {

		//Atributos (Características)
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;

		
		// [$this->nome] = [Funcionario.nome]
		// [$this->numFilho] = [Funcionario.numFilho]
		
		//Métodos Getters e Setters

		//Set - Está sentado o parametro recebido no atributo da classe Funcionário
		function setNome ($nome){
			$this->nome = $nome;
		}

		function setTelefone($telefone){
			$this->telefone = $telefone;
		}

		function setNumFilhos($numFilhos){
			$this->numFilhos = $numFilhos;
		} 

		//Get - Está apenas retornando o valor do atributos
		function getNome (){
			return $this->nome;	
		}

		function getTelefone(){
			return $this->telefone;
		}

		function getNumFilhos(){
			return $this->numFilhos;
		}

		//Métodos (Funções)
		function resumirCadFunc(){
			return "A funcionário(a) $this->nome possui $this->telefone  e a quantidade de $this->numFilhos filhos.";
		}

		function modificarNumFilho($numFilhos){
			//Não precisa retornar nada pois vai afetar um valor

			$this->numFilhos = $numFilhos;
	  //[Atributo do Objeto]  [Paramentro da função]	  
		}

	}


		// Criando o objeto
		$y = new Funcionario();
		echo '<br/>';

		// Chamando os métodos 
		$y -> setNome('Eliane');
		$y -> setTelefone('85 988520541');
		$y -> setNumFilhos(0);

		echo 'O(A) funcionário(a) '.$y -> getNome().' possui '.$y -> getTelefone().' e a quantidade de '.$y -> getNumFilhos().' filhos';

		//echo $y -> modificarNumFilho(3);
		//echo $y -> resumirCadFunc();
		echo '<br/>';

		//Acessando os atributos 
		//echo $y->telefone;

		

?>