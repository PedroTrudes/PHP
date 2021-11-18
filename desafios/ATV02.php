<?php

//Para calcular o IMC é preciso dividir o seu peso pela altura elevada ao quadrado: IMC = Peso ÷ (Altura × Altura). Exemplo: se você pesa 65 kg e tem 1,62m de altura, ficaria 65 / (1,62 x 1,62) = 24.8. Se o resultado ficar entre 18.5 e 24.9 é considerado normal. Caso seja menor que 18.5, é magreza. Entre 25 e 29.9 é sobrepeso e entre 30 e 39.9, obesidade. Acima disso é chamado de obesidade mórbida.


// variaveis.
$nome = "Pedro";
$idade = 21;
$peso = 80.00;
$altura = 1.78;


// calculando o imc 
$imc = $peso / ($altura * $altura);
// formantando os numeros float
$imc = number_format($imc,1,'.',2);


// pegando e mostrando o IMC
echo "Olá $nome \nSeu IMC:  $imc" . PHP_EOL;


// decisoes IF para saber o status do peso
if($imc < 18.5 ){
    echo"Você esta magro!";
}else if(($imc >= 18.5) and ($imc <= 24.9 )){
    echo"Você esta no peso ideal";
}else if(($imc >= 25) and ($imc <=29.9)){
    echo "Você esta sobrepeso";
}else if($imc >= 30){
    echo"Você tem obesidade";
}
