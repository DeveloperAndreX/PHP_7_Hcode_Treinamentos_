<?php


$nome = "Hcode";
$site = 'www.hcode.com.br';
////////////////////////////////////////////////////
$ano = 1990;
$salario = 5500.99;
$bloqueado =  false;
///////////////////////////////////////////////////
$frutas = array("abacaxi","laranja", "manga");
$cesta_ferramentas = array("chave_de_fenda","chave_estrela_15", "chave_de_boca_10", "chave_L_tira_roda","chave_inglesa");

echo $cesta_ferramentas[4];
echo "<br/>";
// echo $frutas[2];

$nascimento = new Datetime();
// var_dump($nascimento);

/////////////////////////////////////////////

$arquivo = fopen("exemplo-03.php",'w', $bloqueado = false, $context = NULL);
// var_dump($arquivo);

/////////////////////////////////////////////
$nulo = NULL;


?>