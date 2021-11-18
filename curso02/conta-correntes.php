<?php

$conta1 = [
    'titular' => 'Pedro',
    'saldo' => 8000
];

$conta2 = [
    'titular' => 'Carol',
    'saldo' => 5000
];

$conta3 = [
    'titular' => 'Viviane',
    'saldo' => 2500
];

$conta4 = [
    'titular' => 'Trudes',
    'saldo' => 15000
];

$contasCorrentes = [$conta1, $conta2, $conta3, $conta4];


for ($i=0; $i < count($contasCorrentes) ; $i++) { 
    echo $contasCorrentes[$i]['titular']. PHP_EOL;
}

