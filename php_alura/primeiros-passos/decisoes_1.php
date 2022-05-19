<?php

$idade=11;
$numeroDePessoas=2;


echo "Você só pode entrar se maior de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($idade >= 18){ // pode usar || ou OR

	echo "Você tem $idade anos". PHP_EOL;
	echo "Pode entrar sozinho...". PHP_EOL;

} else {

	if($idade >= 16 && $numeroDePessoas>1){
		echo "Você tem $idade anos, está acompanhado, então pode entrar...". PHP_EOL;
	}else{
		echo "Você só tem $idade anos. Você não pode entrar...". PHP_EOL;
	}

}


echo "Bay..." . PHP_EOL;


/*

PRECEDÊNCIA 

1°) && / AND (Booleanos)
2°) || / OR (Booleanos)
3°) <, > ,<= ,>= ,== , != (Operadores de Comaparação -> ORDEM DA ESQUERTA PARA DIREITA)

*/
