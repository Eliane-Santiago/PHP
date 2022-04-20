<?php


//Array multidimencional -> serve para agrupar os array associativos

$contasCorrentes = [

	65131670004 => ['titular' => 'Eliane',
'saldo' => 1000
], 
	10977722090 => ['titular' => 'Rangel', 
'saldo' => 1000
], 
	60956329004 => ['titular' => 'Amanda', 
'saldo' => 1000
]

];


foreach ($contasCorrentes as $cpf => $conta) {
	echo $conta['titular'] ." ". $cpf . PHP_EOL;
}


?>