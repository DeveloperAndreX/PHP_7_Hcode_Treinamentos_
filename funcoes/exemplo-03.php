<?php
// parametros de Função:

function ola(string $texto, $periodo = "Bom dia"){
    return "Ola Mundo! $texto $periodo <br>";
}

echo ola("mundo");
echo ola("","Boa Noite");
echo ola("Glaucio", "Boa tarde");
echo ola("Joao", "");

?>