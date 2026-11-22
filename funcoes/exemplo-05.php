<?php
// passagem de valor por Referencia:

$a = 10;
// Passagem de valor por referencia Usando o & comercial;
function trocaValor(&$b) {
 
 $b += 50;

 return $b;
}

echo trocaValor($a);
echo "<br>";
echo trocaValor($a);
echo "<br>";
echo $a;


?>