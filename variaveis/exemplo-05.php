<?php
// Escopo de Variaveis:
// Exemplo de função com escopo Global
$nome = "Glaucio";

function teste(){

    global $nome;
    echo $nome;
}

function teste2(){

    $nome = "João";
    echo "Agora no teste 2: " . $nome;
    
}

// exemplo de funcão com escopo normal
function ip_User() {

    $ip = $_SERVER["REMOTE_ADDR"];
    $script = $_SERVER["SCRIPT_NAME"];
    echo "Endereço do Local Server: {$ip}";
    echo "<br><br>";
    echo "Nome do Script: {$script}";

}

teste();
print("<br><br>");
teste2();
print("<br><br>");
ip_User();
print("<br><br>");












?>