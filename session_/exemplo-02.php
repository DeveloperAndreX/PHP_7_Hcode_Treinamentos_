<?php

include_once("config.php");

// session_destroy();  Limpa a variavel e renova o acesso;

session_unset();

if(isset($_SESSION['nome']) && session_status() === PHP_SESSION_NONE){
 echo "Nome da Sessão Iniciada: " . PHP_SESSION_NONE;
 echo $_SESSION['nome'];

}

?>