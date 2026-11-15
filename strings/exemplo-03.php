<?php
// str_replace()  e str_ireplace_()    str_pos()  str_ipos();
// trim(),  ltrim()  e   rtrim()  
// substr() 

(string)$frase = "A repetiçao é a mae da retençao.";

(string)$palavra = "mae"; 

$q = strpos($frase, "mae");  // posição [14];

$texto = substr($frase, 0, $q);

var_dump($q);  

echo "<br>";

var_dump($texto);

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "<br><br>";

var_dump($texto2);











?>