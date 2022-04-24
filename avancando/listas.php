<?php

//Criando o Array
$idadeList = [21, 23, 19, 25, 30, 411, 18];

//Adicionando um elemnto no array na posição 7
$idadeList[7] = 20;
$idadeList[] = 70; // se não colocar o índice o php já sabe que é para adicionar na última posição
$idadeList[count($idadeList)] = 40; // count(nomeArray) -> puxa o tamanho do array




// Mostrar a lista de idade
foreach($idadeList as $idade){
    echo $idade . PHP_EOL;
}