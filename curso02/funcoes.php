<?php

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


function titularComLetrasMaiusculas (array &$conta)
{
    $conta['titular'] = strtoupper($conta['titular']);
}


function exibirMensagem(String $mensagem) 
{
    echo $mensagem . '<br>';
}

function exibiConta (array $conta) {
    ['titular' => $titular , 'saldo' => $saldo] = $conta;
   echo "<li>Titular: $titular. Saldo: $saldo</li>";
}