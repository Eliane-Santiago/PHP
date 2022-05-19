<?php

class Exemplo {


    public static $atributo1='Eu sou um atributo estatico';
    public $atributo2='Eu sou um atributo normal';


    public static function metodo1(){
        echo 'Eu sou um médoto estatico';
    }

    public function metodo2(){
        echo 'Eu sou um médoto normal';
    }
}


// Acessando os métodos e  atributos estaticos
echo Exemplo::$atributo1;
echo '</br>';
echo Exemplo::metodo1();


echo '</br>'; 
echo '</br>'; 

// Acessando os métodos e  atributos normais
$x = new Exemplo;
echo $x-> atributo2;
echo '</br>';
echo $x-> metodo2();



/*
>>> METÓDO / ATRIBUTOS ESTATICOS
- Para acessar atributos e médotos de uma classe não precisa instânciar o objeto
- É só usar os comandos abaixo

echo Exemplo::$atributo1;
echo Exemplo::metodo1();

OBS: OS COMANDOS (->) E O ($this) NÃO ESTÃO  ACESSÍVEIS PARA OS ATRIBUTOS E MÉTODOS ESTATICOS.
*/

/*
>>> METÓDO / ATRIBUTOS NORMAIS
- Para acessar atributos e métodos de uma classe é necessário instância o objeto porque se não dar erro.
- Segue abaixo os comandos para acessar atributos e métodos normais 

$x = new Exemplo;
echo $x-> atributo2;
echo $x-> metodo2();


*/


?>