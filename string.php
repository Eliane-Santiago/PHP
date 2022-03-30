<?php

$idade= 35;
$nome='Eliane';

echo"Olá, mundo!!!\n";

echo'Olá mundo! minha idade é '.$idade.' anos' ; // Usando aspas simples e concatenando variáveis

echo '\n'; // php não reconhece o caracter especial quebra de linha
echo "\n"; // quebra de linha
echo "\t"; // table

echo"Olá mundo! Meu nome é $nome". PHP_EOL; // outra forma de usar quebra de linha que é mais legíveis S.O


echo"Deus é Fiel";

echo PHP_EOL . PHP_EOL; // outra forma de usar quebra de linha que é mais legíveis S.O


echo"Deus é Amor";

echo PHP_EOL . PHP_EOL; // outra forma de usar quebra de linha que é mais legíveis S.O


echo "Você só pode entrar se maior de 18 anos \n";

echo "Você tem $idade anos, Pode entrar...";


/*
www.php.nrt -> Vê a documentação para vê os caracteres especiais
*/

/* 
DIFERENTES DE ASPAS SIMPLES E ASPAS DUPLAS
ASPAS SIMPLES -> Não reconhece caracteres especiais ou seja tudo que é digitado é reconhecido como string
ASPAS DUPLAS -> Recenhece caracteres especiais
*/


/*

php -a -> digitar os comandos direto no power shell e executar

cls - limpar tela power Shell

php nomeDoArquivo.php -> executar o arquivo

*/