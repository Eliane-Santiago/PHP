<?php 

	// Overloading - é escrever o método com mesmo nome porem com funcionalidade diferente dentro da mesma classe.

	/*
	Sobrecarga(Overloading): A sobrecarga é um conceito orientado a objetos em que dois ou mais métodos têm o mesmo nome de método com argumentos ou parâmetros diferentes (obrigatório) e tipo de retorno (não necessário). Isso pode ser feito como Sobrecarga do Construtor, Sobrecarga do Operador e Sobrecarga do Método.
	*/



/*	
EXEMPLO DE OVERLOADING

<?php
  
class GFG {
    function multiply($var1){
        return $var1;
    }
      
    function multiply($var1,$var2){
        return $var1 * $var1 ;
    }
}
  
$ob = new GFG();
$ob->multiply(3,6);
?>	
*/



	//Modelo - Criação da Classe

	class Funcionario {

		public $nome = null;
		public $telefone = null;
		public $numFilhos = null;
		public $cargo = null;
		public $salario = null;

		
		// [$this->nome] = [Funcionario.nome]
		// [$this->numFilho] = [Funcionario.numFilho]
		
		//Métodos Mágicos Getters e Setters
		function __set($atributo, $valor){
			$this->$atributo = $valor;
		}

		function __get($atributo){
			return $this->$atributo;
		}


		//Métodos (Funções)
		function resumirCadFunc(){
			return "A funcionário(a) $this->nome possui $this->telefone e a quantidade de $this->numFilhos filhos.";
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
		$y->__set('nome','Eliane');
		$y->__set('telefone','85 988520541');
		$y->__set('numFilhos', 0);

		echo 'O(A) funcionário(a) '.$y->__get('nome').' possui '.$y->__get('telefone').' e a quantidade de '.$y->__get('numFilhos').' filhos';

		//echo $y -> modificarNumFilho(3);
		//echo $y -> resumirCadFunc();
		echo '<br/>';

		//Acessando os atributos 
		//echo "$y->telefone";

		

?>