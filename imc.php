<?php

	$peso = readline("Digite seu peso: "); // Criando a variável e aguardando o valor da variável
	$altura = readline("Digite sua altura: ");


	$imc = round($peso / ($altura * $altura),2); // mostra só duas casa decimais

	if ($imc <= 18.50){
		echo "Seu IMC é: $imc -> ABAIXO DO PESO NORMAL";
	} else if ($imc > 18.50 && $imc <= 24.90){
		echo "Seu IMC é: $imc -> PESO NORMAL";
	} else {
		echo "Seu IMC é: $imc -> ACIMA DO PESO NORMAL";
	};
	


?>