<?php


/* 
>>> TIPOS DE DADOS PRIMITIVOS
- TIPOS BÁSICOS: INTEIRO(INT), PONTO FLUTUANTE (FLOAT), STRING, BOOLEAN
- TIPOS COMPOSTOS: ARRAY E OBJETO
- TIPOS ESPECIAIS: NULL E RESOURCE
*/


// String
$nome = "Hcode";
$site = 'www.hcode.com.br';

// Inteiro
$ano = 1990;

echo"<br/>";
echo"<br/>";

var_dump($ano);

// Float - Ponto Flutuante
$salario = 5500.99;


//Booloano
$bloqueado = false;

//Array
$frutas = array("Abacaxi", "Laranja", "Manga");
echo $frutas[2];

//Objeto
$nascimento = new dateTime(); //Classe nativa do php

echo"<br/>";
echo"<br/>";

var_dump($nascimento);

echo"<br/>";
echo"<br/>";

// Resource
$arquivo = fopen("variaveis.php", "r");

var_dump($arquivo);

//Null -> É a ausencia de valor

$nulo = null; //Ausencia de valor
$vazio = ""; // Foi iniciado só não tem valor, porém já um lugar reservado na memória



   