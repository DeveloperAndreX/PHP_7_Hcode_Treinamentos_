<?php
// meu exemplo pratico:

(int) $a = 10;
(int) $b = 4;
(string)$texto = "saudação";



echo gettype($a) . "<br>". gettype($b) . "<br>" . gettype($texto);

echo "<br>";

if(isset($a) && isset($b)):
    (int)$soma = ($a + $b);
    if($soma > 13):
        echo $texto;
    else:
        echo "não deu certo tente novamnete";
    endif;
else:
    echo "As variaveis 'A' e 'B' não foram definidas <br>";
    echo "Undefined variable";
endif;



/*
$salario = 1000.00;

if(isset($salario)):
    echo "salario" . "<br>";
    
    */



?>