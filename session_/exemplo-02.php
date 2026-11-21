<?php

include_once("exemplo-03.php");

//
session_unset();


if(isset($_SESSION['nome']) && session_status() === PHP_SESSION_NONE){
 echo "Nome da Sessão Iniciada: " . PHP_SESSION_NONE;
 echo $_SESSION['nome'];
 
}







?>