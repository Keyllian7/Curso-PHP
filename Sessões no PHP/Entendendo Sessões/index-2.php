<?php

require_once("config.php");

// Remove uma variável específica da sessão
session_unset($_SESSION["user"]); // Limpa apenas a variável 'user', sem terminar a sessão, caso não passe um parâmetro limpa todas as variáveis de sessão

// Destrói a sessão ---> (remove todas as variáveis e desconecta o usuário)
session_destroy();

echo $_SESSION["user"]; // Isso não deve imprimir nada ---> a sessão foi destruída
?>
