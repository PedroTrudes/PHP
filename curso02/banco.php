<?php

function soma ($x){

    return $x + 10;
}

$resultados = soma(2);
echo $resultados . PHP_EOL;

function sacar ($conta, $valorSacar) {
    
    if ($valorSacar > $conta ['saldo']) {
        exibirMensagem ("Voce não pode sacar esse valor : " . $conta['titular']);
    }else {
        $conta ['saldo'] -= $valorSacar;
    }

    return $conta;
}


function exibirMensagem($mensagem) 
{
    echo $mensagem . PHP_EOL;
}


$contasCorrentes = [
    000 => [
        'titular' => 'Pedro ',
        'saldo' => 8000
    ],

    123 => [
        'titular' => 'Carol ',
        'saldo' => 5000
    ],
    456 => [
        'titular' => 'Viviane ',
        'saldo' => 2500
    ],
    789 => [
        'titular' => 'Trudes ',
        'saldo' => 15000 
    ]
];

$contasCorrentes[000] = sacar($contasCorrentes[000], 9000);
$contasCorrentes[456] = sacar($contasCorrentes[456], 500);


foreach ($contasCorrentes as $cpf => $contas) {
    exibirMensagem ( $cpf . " " . $contas['titular'] . '' . $contas['saldo']);
}
