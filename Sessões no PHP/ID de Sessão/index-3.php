<?php

session_id('c4c8hhfubvqr98ncack6v8u0dk'); // Antes do comando start da pra recuperar uma sessãoo e acessar os mesmos dados

require_once("config.php");

session_regenerate_id(); // Força a uma nova id de sessão a ser gerada ---> se usa na página de login para evitar hack's

echo session_id(); // Mostra o id da sessão

var_dump($_SESSION)

?>