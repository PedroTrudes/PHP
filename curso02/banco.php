<?php

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


function sacar ($conta, float $valorSacar) 
{
    
    if ($valorSacar > $conta ['saldo']) {
        exibirMensagem ("Voce não pode sacar esse valor : " . $conta['titular']);
    }else {
        $conta ['saldo'] -= $valorSacar;
    }

    return $conta;
}


function depositar ($conta, float $valorDepositar) 
{
    if ($valorDepositar > 0) {
        $conta['saldo'] += $valorDepositar;
    }else {
        exibirMensagem ("desposito precisa ser possitivo : " . $conta['titular']);
    }
    return $conta;
}


function exibirMensagem(String $mensagem) 
{
    echo $mensagem . PHP_EOL;
}


// sacar
$contasCorrentes[000] = sacar($contasCorrentes[000], 9000);
$contasCorrentes[456] = sacar($contasCorrentes[456], 100);

//depositar 
$contasCorrentes[123] = depositar($contasCorrentes[123], -5000);


foreach ($contasCorrentes as $cpf => $contas) {
    exibirMensagem ( $cpf . " " . $contas['titular'] . '' . $contas['saldo']);
}
