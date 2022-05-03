
<?php


	//Modelo - Criação da Classe

	class Funcionario {

		//Atributos (Características)
		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
        public $cargo = null;
        public $salario = null;
		
		
		
		//Métodos Mágicos Getters e Setters

		function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
            return $this->$atributo;
        }

		//Métodos (Funções)
		function resumirCadFunc(){
			return "A funcionário(a) " . $this->__get('nome') . " possui o telefone " . $this->__get('telefone') . " e a quantidade de " . $this->__get('numFilhos') . " filhos.";
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
		$y -> __set('nome', 'Eliane');
		$y -> __set('Telefone', '85 988520541');
		$y -> __set('numFilhos', 0);

        echo $y -> resumirCadFunc();    

		// echo 'O(A) funcionário(a) '.$y -> __get('nome').' possui '.$y -> __get('Telefone').' e a quantidade de '.$y -> __get('numFilhos').' filhos';

	
		echo '<br/>';

	

		

?>

