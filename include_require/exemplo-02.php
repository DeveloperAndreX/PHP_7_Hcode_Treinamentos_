<?php
/**
 * O require obriga que o arquivo exista e esteja funcionando corretamente. caso não gera um erro Fatal; (include_path), 
 * Include tenta funcionar mesmo que o arquivo não exista ou esteja com problema.
 * 
 * require_once; traga apenas uma vez;
 * include_once;
 */
//include "exemplo-01.php";

require_once ("exemplo-01.php");
require_once ("exemplo-01.php");

(int)$value1 = 15;
(int)$value2 = 40;

$resultado = somar($value1, $value2);

echo $resultado;




?>