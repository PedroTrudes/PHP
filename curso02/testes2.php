<?php

$aluno1 = [
    'nome' => 'Pedro',
    'nota' => 10
];

$aluno2 = [
    'nome' => 'carol',
    'nota' => 10
];

$alunos = [$aluno1, $aluno2];

for ($i=0; $i < count($alunos) ; $i++) { 
    echo $alunos[$i]['nome']. PHP_EOL;
}