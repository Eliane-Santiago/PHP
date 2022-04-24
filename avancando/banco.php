<?php

//Criando uma função (SUBROTINA)
function exibeMensagem(String $mensagem)
{
    echo $mensagem . PHP_EOL;
}

// Criando a função Sacar
function sacar (array $conta, float $valorSaque): array //Colocar o tipo da variável ajudar a deixar a função mais segura e ajudar a localicar os erros.
{
    if($valorSaque > $conta['saldo']){
        echo("Saque não realizado. Saldo insuficiente." . PHP_EOL );
    }else{
        $conta['saldo'] -= $valorSaque;
    }

    return $conta;
}

// Criando a função depositar
function deposito (array $conta, float $valorDeposito): array //Colocar o tipo da variável ajudar a deixar a função mais segura e ajudar a localicar os erros.
{
    if($valorDeposito < 0){
        exibeMensagem("Deposito não realizando. Valor tem que ser maior que ZERO");
    }else{
        $conta['saldo'] += $valorDeposito;
    }
    
    return $conta;
}

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


// Mostra os elemento do array
foreach ($contasCorrentes as $cpf => $conta) {
	exibeMensagem($cpf.' '. $conta['titular'].' '.$conta['saldo']); // Usando a função Exibir mensagem
}


?>