<?php


//Array multidimencional -> serve para agrupar os array associativos

$contasCorrentes = [

	65131670004 => ['titular' => 'Eliane',
'saldo' => 1000
], 
	10977722090 => ['titular' => 'Rangel', 
'saldo' => 1000
], 
	'609.563.290-04' => ['titular' => 'Amanda', 
'saldo' => 1000
]

];


//Adionar elementos no array
//Indice significativo(String): Tem que colocar o indice pois o php vai fazer o auto incremento começando em ZERO
$contasCorrentes['873.547.116-67'] = ['titular' => 'Bruna',
'saldo' => 2000];

//Indice numerico: não precisa colocar o número do indice pois o php faz o auto incremento
$contasCorrentes[ ] = ['titular' => 'Alvaro',
'saldo' => 2000];

$contasCorrentes[ ] = ['titular' => 'Silwayner',
'saldo' => 2000];

$contasCorrentes[ '828.254.792-17'] = ['titular' => 'Rabugem',
'saldo' => 2000];

$contasCorrentes[ ] = ['titular' => 'Pulguento',
'saldo' => 2000];

// SAQUE
if(1500 > $contasCorrentes[65131670004]['saldo']){
	echo"Saque não realizado. Saldo Insuficiente";
} else{
	$contasCorrentes[65131670004]['saldo'] -= 1500;
}

echo " ". PHP_EOL; // Quebra de linha
echo " ". PHP_EOL; 

// Mostra os elemento do array
foreach ($contasCorrentes as $cpf => $conta) {
	echo $conta['titular'] ." ". $cpf ." ".$conta['saldo'] .PHP_EOL;
}





?>