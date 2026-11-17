<?php
// comando basico de importante;
(int)$qualSuaIdade = 125;

(int)$idadeCriança = 12;
(int)$idadeMaior = 18;
(int)$idadeMelhor = 65;


if($qualSuaIdade < $idadeCriança):

    echo ucfirst("Criança");


elseif($qualSuaIdade < $idadeMaior):

    echo ucwords("Adolecente");

    elseif($qualSuaIdade < $idadeMelhor):

    echo ucwords("Adulto");

else: 
    echo ucwords("Idoso");

endif;

// Operador que testa uma condição, IF ternario: 

echo "<br>";

echo ($qualSuaIdade < $idadeMaior)? "menor de Idade" : "maior de idade";









?>