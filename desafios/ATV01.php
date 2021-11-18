<?php

// criando a variavel 
$contador = 1;
// criando o modelo de entrada :
echo"numero impares de 1 a 100" . PHP_EOL;

// enquando o contador não for 100 ele vai se repetir 
while ($contador <= 100){
    echo"= $contador \n";
    $contador = $contador + 2;
}


// outra maneira de fazer
// o for foi usado nesse modelo pois ja tinhamos o numero certo que era o 100

//for ($contador = 1; $contador <100; $contador++){
  //  if ($contador %2 !=0) {
    //    echo $contador . PHP_EOL;
    //}
//}