<?php

/*
>>> FORMAS PARA ASSOCIAR ARQUIVOS EXTERNOS

01) INCLUDE
OBS: SE O NOME DO ARQUIVO ESTIVER ERRADO ESSA FUNÇÃO NÃO RETORNA O ERRO PRECISO
include 'funcoes.php'; 

02) REQUIRE
OBS: SE O NOME DO ARQUIVO ESTIVER ERRADO ESSA FUNÇÃO RETORNA O ERRO PRECISO (FORMA MAIS USADA)
require 'funcoes.php'; 

03) REQUIRE_ONCE: garante que o arquivo será incluído apenas uma vez
OBS: SE O ARQUIVO EXTERNO JÁ TIVER SIDO IMPORTANDO NÃO DA ERRO CONTINUA EXECUTANDO O CÓDIGO
É UMA FORMA DE EVITAR UM ERRO NA EXECUÇÃO DA APLICAÇÃO

*/

require_once 'funcoes.php'; //Associando o arquivo funcoes.php a essa página


//Array multidimencional -> serve para agrupar os array associativos
$contasCorrentes = [

	'651.316.700-04' => ['titular' => 'Eliane',
'saldo' => 1000
], 
	'109.777.220-90' => ['titular' => 'Rangel', 
'saldo' => 1000
], 
    '609.563.290-04' => ['titular' => 'Amanda', 
'saldo' => 1000]

];

//SAQUE
$contasCorrentes['651.316.700-04'] = sacar($contasCorrentes['651.316.700-04'] , 700);
$contasCorrentes['109.777.220-90'] = sacar($contasCorrentes['109.777.220-90'] , 300);
$contasCorrentes['609.563.290-04'] = sacar($contasCorrentes['609.563.290-04'] , 450);

//DEPOSITO
$contasCorrentes['651.316.700-04'] = deposito($contasCorrentes['651.316.700-04'] , -100);
$contasCorrentes['109.777.220-90'] = deposito($contasCorrentes['109.777.220-90'] , 200);
$contasCorrentes['609.563.290-04'] = deposito($contasCorrentes['609.563.290-04'] , 50);

titularLetraMaiuscula($contasCorrentes['651.316.700-04']);

unset($contasCorrentes['651.316.700-04']); // Deleta elemento do array

// Mostra os elemento do array

/* 
>>> FORMA 1

foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem("$cpf {$conta['titular']} {$conta['saldo']}"); // Usando a função Exibir mensagem
}
*/

/*
>>> FORMA 2

foreach ($contasCorrentes as $cpf => $conta) {
    list('titular' => $titular, 'saldo' => $saldo) = $conta;
	exibeMensagem("$cpf $titular $saldo"); // Usando a função Exibir mensagem
}
*/

foreach ($contasCorrentes as $cpf => $conta) {
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
	exibeMensagem("$cpf $titular $saldo"); // Usando a função Exibir mensagem
}


/*
>>> Interpolação de strings

O array associativo trabalha com dois tipos de Strings
- STRING SIMPLES: permite trabalhar com a forma a baixo
echo("$cpf $conta[titular] $conta[saldo]");

- STRING COMPLEXA (Essa é a forma mais usada)
echo("$cpf {$conta['titular']} {$conta['saldo']}");
*/


/*
>>> NÍVEIS DE ERROS BASICOS DO PHP

01) E_WARNING (NÃO PARA A APLICAÇÃO): o php não entende o código digitado, informa que não entendeu e continua executando a aplicação

02) E_NOTICE (NÃO PARA A APLICAÇÃO): o php entende o código digitado, porém não encontra valores associados, o php atribui o valor NULL e continua executado a aplicação

03) E_ERROR (PARA A APLICAÇÃO): o php para a aplicação e informa o erro que está acontecendo

*/


?>