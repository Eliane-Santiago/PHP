<?php

$idade=21;
$nome='Vinicius'


echo "Você só pode entrar se maior de 18 anos \n" . PHP_EOL;

if ($idade == 18 || $idade >18){ // pode usar || ou OR

	echo "Você tem $idade anos". PHP_EOL;

	echo "Pode entrar...". PHP_EOL;

} else {

	echo "Você não pode entrar...".
}



if ($idade >= 18 and $nome == 'Vinicius'){ 

	echo "Você tem $idade anos". PHP_EOL;

	echo "Seu nome é $nome ". PHP_EOL;

	echo "Pode entrar...". PHP_EOL;

} else {

	echo "Você não pode entrar...".
}