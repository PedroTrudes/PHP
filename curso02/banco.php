
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

echo "<ul>";

foreach ($contasCorrentes as $cpf => $contas) {
    exibiConta($contas);
}
echo "</ul>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <ul>
        <?php foreach ($contasCorrentes as $cpf => $contas) { ?>

        <li>
            <h2> <?= $contas['titular']; - $cpf; ?> </h2>
        </li>
        <li>
           <h3> Saldo:  <?= $contas['saldo']; ?> </h3>
        </li>

        <?php } ?>
    </ul>

</body>
</html>