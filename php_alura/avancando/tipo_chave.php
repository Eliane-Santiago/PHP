<?php

/*
>>> O php só consegue trabalhar em chave dos array associativos com tipo NUMERICO (INTEIRO) e STRINGS
OBS: QUANDO É COLOCADO UM OUTRO TIPO DADO NA CHAVE O PHP CONVERTE PARA O TIPO NUMERO (INTEIRO).
*/

$array = [
    1 => 'a',
    '1' => 'b', // CONVERTIDO PARA 1
    1.5 => 'c', // CONVERTIDO PARA 1
    true => 'd', // CONVERTIDO PARA 1
    2 => 'e'

];

foreach($array as $item){
    echo $item . PHP_EOL;
}