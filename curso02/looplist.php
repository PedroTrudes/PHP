<?php

// usando uma array para guardar dados 
$idadeList = [21, 20, 35, 50, 10, 80, 5, 20];

// aqui estou usando um COUNT para contar quantas coisas tem no array:
// assim fica mais facil para puxar a lista sem saber quanto tempo no array!
for ($i=0; $i < count($idadeList) ; $i++) { 
    echo $idadeList[$i] . PHP_EOL;
    //echo count($idadeList) . PHP_EOL;
}

echo "Quantos itens tem no array: " . count($idadeList) ;