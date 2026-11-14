<?php
// Precedencia de Operadores: 

(int)$resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;  // false;;
(int)$resultado2 = (10 + 3) / 2 > 5 || 10 + 5 < 3; // true;

var_dump($resultado);
echo "<br>";
var_dump($resultado2);



?>