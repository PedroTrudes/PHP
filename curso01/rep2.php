<?php

// for é usado quando temos um valor especifico 

for ($contador = 1; $contador <= 15; $contador ++) {
   
    if ($contador == 13) {
        continue; // para continuar i loop
        //break; - para parar o loop
    }

    echo "#$contador" . PHP_EOL;
}