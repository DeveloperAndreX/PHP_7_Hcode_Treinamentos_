<?php
// Escopo de Variaveis:
$nome = "Glaucio";

function teste(){
    global $nome;
    echo $nome;
}

function teste2(){
    $nome = "João";
    echo "Agora no teste 2" . $nome;
    
}

teste();
echo "<br>";
teste2();











?>