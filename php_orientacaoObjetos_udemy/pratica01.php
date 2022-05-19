<?php

/*
Identifique as classes e implemente um programa para a seguinte especificação: “O supermercado vende diferentes tipos de produtos. Cada	produto	tem	um preço e uma quantidade em estoque. Um pedido	de um cliente é	composto de	itens, onde	cada item especifica o produto que o cliente deseja	e a	respectiva quantidade. Esse	pedido pode	ser pago em	dinheiro, cheque ou	cartão.

>>> Classes 
- Produtos (Atributos: Preço, Quantidade)
- Pedido (Atributos: NomeProduto, Quantidade, FormaPagto)
*/


class Produtos{

    public $nomeProduto = Null;
    public $preco = Null;
    public $qdeEstoque = Null;

    public function __construct($nomeProduto, $preco, $qdeEstoque){
        $this->nomeProduto = $nomeProduto;
        $this->preco = $preco;
        $this->qdeEstoque = $qdeEstoque;
    }

    function imprimeProduto(){
        echo "<br/> Nome do Produto: $this->nomeProduto <br/> Preço(R$): $this->preco <br/> Estoque(UN): $this->qdeEstoque";
    }

}

class Pedido{

    public $nomeProduto = Null;
    public $quantidade = Null;
    public $formaPagto = Null;

    public function __construct(Produtos $nomeProduto, $quantidade, $formaPagto){
        $this->nomeProduto = $nomeProduto;
        $this->quantidade = $quantidade;
        $this->formaPagto = $formaPagto;
    }  

    function venda(){
        
    }
}


$arroz = new Produtos('Arroz', 3.90 , 1000);


$arroz -> imprimeProduto();


$pedido1 = new Pedido($arroz, 2, 'Dinheiro');

echo "<br/>" .$pedido1->nomeProduto->nomeProduto;

//$pedido1 -> venda();



?>