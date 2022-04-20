<?php


//Arrays Associativo - É criar um arrey determinado o nome dos índices
// $array = ['indice_array' => 'elemento_array']

$conta1 = ['titular' => 'Eliane',
'saldo' => 1000
];

$conta2 = ['titular' => 'Rangel', 
'saldo' => 1000
];

$conta3 = ['titular' => 'Amanda', 
'saldo' => 1000
];


//Array multidimencional -> serve para agrupar os array associativos
$contasCorrentes = [$conta1, $conta2, $conta3];




for ($i=0; $i < count($contasCorrentes); $i++){
	echo $contasCorrentes[$i]['titular'] .PHP_EOL;
}

// count($contasCorrentes) - função para retornar o tamanho do array

?>