<?php
/*
$anoNascimento = 1990;

$nomeCompleto = ""; */

// na linha de baixo temos uma variavel com numero no nome;
$nome1 = "João";
$sobreNome = "Rangel";
$nomeCompleto = $nome1 . " " . $sobreNome;

echo $nomeCompleto;
exit;

echo $nome1;
echo "<br>";

// Unset e utilizado para destruir as variaveis, posso passar varias ex: unset($nome), $a, $b, $c etc..
unset($nome1);     

// Isset e utilizado para verificar se a variavel existe ex: isset($_nome2);

if (isset($nome1)) {

    echo $nome1;
    
}else {
    echo ' Undefined variable $nome1';
}









?>