<?php

// meu exemplo pratico:

(int)$a = 10;
(int)$b = 3;

if (isset($a) && isset($b)){
    echo $a += 1;
    echo "<br>";
    echo $a += $b; 
    echo "<br>";
    echo $a -= $b;
    echo "<br>";
    echo $a .= $b;
      
    
};

global $resultado, $a , $b;
var_dump($resultado);
$string = "O valor esta correto no tipo de dado e no valor da variavel: $resultado <br>";
$resultado = (int)$a + (int)$b;
echo "<br><br>";

if($resultado == 13){
    (float)$soma = $resultado;
    if($soma === 13){
        $string = ucwords($string);
        return $string;
    }else{
        echo ucfirst("O valor e o tipo não são Iguais da variavel 'SOMA' que  e: $soma");
        var_dump($soma);
    }

}else{
    echo "O resultado não e igual a o valor: 13";

};

?>