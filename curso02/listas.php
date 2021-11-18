<?php

// usando uma array para guardar dados 
$idadeList = [21, 20, 35, 50, 10, 80];

$idadeList[] = 29;

foreach ($idadeList as $idade) {
    echo $idade . PHP_EOL;
}