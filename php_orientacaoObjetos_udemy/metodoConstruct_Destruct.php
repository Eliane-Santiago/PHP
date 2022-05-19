

<?php


	//Modelo - Criação da Classe

	class Pessoa {

		//Atributos (Características)
		public $nome = null;
	
        //CONSTRUTOR - É UMA FUNÇÃO CRIADA PARA INICIALIZAR VALORES NO OBJETO NO MOMENTO QUE É INSTANCIADO
        function __construct($nome){
            echo 'Objeto Iniciado';
            $this->nome = $nome;
        }

        // Removendo o objeto com seus valores de atributos
        function __destruct(){
            echo 'Objeto Removido';
        }

        function __get($atributo){
            return $this->$atributo;
        } 

        function correr(){
            return $this->__get('nome') . " está correndo...";
        } 
		

	}

    $pessoa = new Pessoa("Eliane");
    echo '<br /> Nome: ' . $pessoa->__get('nome');
    echo '<br />' . $pessoa->correr();

	
	echo '<br/>';

    // Removendo o objeto
    unset($pessoa); 

	

		

?>


