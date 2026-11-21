<?php
require_once("config.php");
session_destroy();
//echo session_save_path();
echo "<br>";

var_dump(session_start());

/*
switch(){
    case 0:
        break;
    case 1:
        break;
    case 2:
        break;
    default:
    echo session_status();
}
*/




?>