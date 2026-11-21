<?php
require_once("config.php");

echo session_save_path();

echo "<br>";


var_dump(session_status());

echo "<br>";

switch(session_status()){
    case 0:
        echo "PHP_SESSION_ACTIVE se as sessões estiverem habilitadas, e uma existir";
        break;
    case 1:
        echo "PHP_SESSION_NONE se as sessões estiverem habilitadas, mas nenhuma existir.";
        break;
    case 2:
        echo "PHP_SESSION_DISABLED se as sessões estiverem desabilitadas.";
        break;
    default:
    echo"O valor da sessão atual e" .  session_status();
}





?>