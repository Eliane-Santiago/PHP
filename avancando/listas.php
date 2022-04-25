<?php

//Criando o Array
$idadeList = [21, 23, 19, 25, 30, 411, 18];

list($idadeMara, $idadeAna, $idadeLuan) = $idadeList; // Associando o array a uma variável

echo "idade da Mara $idadeMara" . PHP_EOL;
echo "idade da Ana $idadeAna" . PHP_EOL;
echo "idade da Luan $idadeLuan" . PHP_EOL;


unset($idadeList[5]); // Deleta o elemento na posição do array $idadeList

//Adicionando um elemnto no array na posição 7
$idadeList[7] = 20;
$idadeList[] = 70; // se não colocar o índice o php já sabe que é para adicionar na última posição
$idadeList[count($idadeList)] = 40; // count(nomeArray) -> puxa o tamanho do array




// Mostrar a lista de idade

/*
foreach($idadeList as $idade){
    echo $idade . PHP_EOL;  
}
*/

foreach($idadeList as $idade){

    echo $idade . PHP_EOL;    
}


