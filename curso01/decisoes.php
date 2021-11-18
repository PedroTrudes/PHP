<?php
// criando variaveis
$idade = 19;
$nome = "Pedro";
$numeroPessoas = 1;

// msg principal.
echo "você só pode entrar se tiver a partir de 18 anos. " . PHP_EOL;
echo "ou a partir de 16 anos acompanhado!\n";

// if ($idade >= 18) ele vai ver se vc tem 18 ou mais de 18
if ($idade >= 18 and $nome == 'Pedro') {
    echo "Olá $nome Você tem $idade anos. \npode entrar";

//usando o ELSE IF para continuar um if dps da primeira verificação
}else if ($idade >= 16 && $numeroPessoas > 1){
    echo"Olá $nome Você tem $idade e esta acompanhando \nentão pode entrar";
}else {
    echo"Olá $nome Você não pode entrar!";
}

//pulando linhas
echo "\n\n";
echo "Adeus!\n";