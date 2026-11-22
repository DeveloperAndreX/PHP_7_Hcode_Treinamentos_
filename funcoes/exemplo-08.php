<?php
// Tipo de retorno: 


function soma(int... $valores): int{

    return array_sum($valores);

}

echo soma(1,2);
echo "<br>";
echo soma(25, 35);
echo "<br>";
echo soma(5,8);
echo "<br>";







?>