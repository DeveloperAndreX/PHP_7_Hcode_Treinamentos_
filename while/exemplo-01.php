<?php

$condicao = true;

// enquanto retorna true ele continua executando:
while($condicao){
    $numero = rand(1, 10);

    if($numero === 3){

        echo  "' TRêS ' ";

        $condicao = false;
    }

    echo $numero . "  ";

}








?>