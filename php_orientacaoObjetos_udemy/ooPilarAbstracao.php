<?php 

	//Modelo - Criação da Classe

	class Funcionario {

		//Atributos (Características)
		public $nome = 'Rangel';
		public $telefone = '85 988301617';
		public $numFilhos = 0;

		
		// [$this->nome] = [Funcionario.nome]
		// [$this->numFilho] = [Funcionario.numFilho]
		
		
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

		//echo $y -> modificarNumFilho(3);
		echo $y -> resumirCadFunc();
		echo '<br/>';

		//Acessando os atributos 
		//echo $y->telefone;

		

?>