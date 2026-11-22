<?php
function foo()
{
     $numargs = func_num_args(); //conta os argumentos;
     echo "Número de argumentos: $numargs<br />\n"; 
     if ($numargs >= 2) {
     echo "Segundo argumento é: " . func_get_arg(1) . "<br />\n"; // o segundo argumento e 2
     }
}

foo (1, 2, 3);
?>