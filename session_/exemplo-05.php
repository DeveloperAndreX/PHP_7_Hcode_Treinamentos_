<?php
require_once("config.php");

echo session_save_path();

echo "<br>";


var_dump(session_status());

echo "<br><br>";

switch(session_status()){
    case PHP_SESSION_ACTIVE:
        echo "as sessões estão habilitadas, e uma sessão existe!";
        break;
    case PHP_SESSION_NONE:
        echo  "se as sessões estam habilitadas, mas nenhuma iniciada!.";
        break;
    case PHP_SESSION_DISABLED:
        echo " As sessões estão desabilitadas.";
        break;
    default:
    echo"O valor da sessão atual e" .  session_status();
}

/*
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if(session_status() !== PHP_SESSION_NONE) session_start();
*/






?>