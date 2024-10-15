<?php

// Definindo uma constante com define() - nome em maiúsculas seguindo convenção
define("SERVIDOR", "127.0.0.1");
echo SERVIDOR . "<br>";

// Definindo uma constante de array
define("BANCO_DE_DADOS", [
    '127.0.0.1',  
    'root',        
    'password',    
    'test'         
]);
print_r(BANCO_DE_DADOS);
echo "<br><hr>";

// Tentativa de definir constante case-insensitive (removido no PHP 7.3)
define("Carros", [
    'Ferrari',
    'Fusca',
    'Mustang',
    'Hilux'
], true);  // O terceiro parâmetro 'true' foi removido a partir do PHP 7.3
print_r(Carros);
echo "<br><hr>";

// Constantes pré-definidas do PHP
echo PHP_VERSION;  
echo "<br>";
echo DIRECTORY_SEPARATOR;
echo "<br><hr>";

// Exemplos de case-sensitive e case-insensitive em PHP

# Case-Sensitive (variáveis são case-sensitive)
$variavel = "valor 1";
echo $variavel . "<br>";  

$Variavel = "valor 2";
echo $Variavel . "<br><hr>";

# Case-Insensitive (funções e palavras-chave são case-insensitive)
echo "Olá!";  // Função echo em letras minúsculas
ECHO "Olá!";  // Função echo em letras maiúsculas, funciona da mesma forma

?>
