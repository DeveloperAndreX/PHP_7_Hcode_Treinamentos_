<?php
 
$name = 'Hcode Treinamentos';
 
$replace = 'Cursos';

$new_name = substr($name, 0,  strpos($name, 'T' )) . $replace;


echo $new_name;

echo "<br>";

$new_name =  str_replace($name, 'Treinamentos', $replace, $name);

echo "<br>";

echo ucwords($new_name);



?>