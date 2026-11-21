<?php

session_id("58lldpr4475s6gks12lb07b6lc");

require_once("config.php");

// gerar um ID de session: 


session_regenerate_id();

echo session_id();

var_dump($_SESSION);

?>