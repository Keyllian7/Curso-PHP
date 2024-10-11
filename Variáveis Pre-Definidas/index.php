<?php
// Obtém o valor do parâmetro "a" da URL e o converte para inteiro
$nome = (int)$_GET["a"];
var_dump($nome);

echo "<br>";

// Obtém o endereço IP do cliente que está acessando a página
$ip = $_SERVER["REMOTE_ADDR"];

// Obtém o nome do script atual que está sendo executado
$file = $_SERVER["SCRIPT_NAME"];

echo $ip . " " . $file;
?>
