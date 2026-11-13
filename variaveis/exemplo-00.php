<?php 

/* Casting (conversão explícita) */

$valor = "123";

// Forçando para inteiro
$inteiro = (int)$valor;

// Forçando para float
$decimal = (float)$valor;

// Forçando para string
$texto = (string)$valor;

// Forçando para boolean
$bool = (bool)$valor;

var_dump($inteiro, $decimal, $texto, $bool);
?>
