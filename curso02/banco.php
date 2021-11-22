<?php

require_once 'funcoes.php';

$contasCorrentes = [
    000 => [
        'titular' => 'Pedro ',
        'saldo' => 8000
    ],

    123 => [
        'titular' => 'carol ',
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


// sacar
$contasCorrentes[000] = sacar($contasCorrentes[000], 9000);
$contasCorrentes[456] = sacar($contasCorrentes[456], 100);

//depositar 
$contasCorrentes[123] = depositar($contasCorrentes[123], -5000);

// Apagando
unset($contasCorrentes[789]);

titularComLetrasMaiusculas($contasCorrentes[123]);


foreach ($contasCorrentes as $cpf => $contas) {
    ['titular' => $titular, 'saldo' => $saldo] = $contas;
    exibirMensagem( 
        "CPF: $cpf \nTitular: $titular Saldo: $saldo" 
    );
}
