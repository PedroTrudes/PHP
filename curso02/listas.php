<?php

// usando uma array para guardar dados 
$idadeList = [21, 20, 35, 50, 10, 80];

list($idadeVinicius, $idadePedro) = $idadeList;

$idadeList[] = 29;

unset($idadeList[4]);

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}