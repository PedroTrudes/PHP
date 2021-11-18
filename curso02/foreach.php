<?php

$contasCorrentes = [
    000 => [
        'titular' => 'Pedro',
        'saldo' => 8000
    ],

    123 => [
        'titular' => 'Carol',
        'saldo' => 5000
    ],
    456 => [
        'titular' => 'Viviane',
        'saldo' => 2500
    ],
    789 => [
        'titular' => 'Trudes',
        'saldo' => 15000 
    ]
];


$contasCorrentes [] = [
    'titular' => 'neni',
    'saldo' => 100
];

foreach ($contasCorrentes as $cpf => $contas) {
    echo $cpf . " " . $contas['titular'] . PHP_EOL;
}
