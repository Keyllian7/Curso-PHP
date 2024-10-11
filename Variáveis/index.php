<?php

// Declaração de variáveis
$nome = "Keyllian";
echo "$nome<br>";

// unset($nome); // Remove a variável da memória

// Verificação se a variável está definida
if (isset($nome)) {
    var_dump($nome); // Exibe detalhes da variável
}

// Comentário de linha única

/*
   Comentário de múltiplas linhas
*/

echo "<br>";

// Concatenando strings
$sobrenome = "Azevedo";
$nomeCompleto = $nome . " " . $sobrenome; // O ponto (.) faz a concatenação
echo $nomeCompleto;

echo "<br>";

// Declaração de variáveis com diferentes tipos de dados
$carro = "Fusca";    // String
$ano = 2024;         // Inteiro
$salario = 1.412;    // Float
$boleano = true;     // Booleano

// Arrays - tipo composto
$frutas = array("Abacaxi", "Maçã", "Manga");

// Exibindo valor de um array pela posição (índice)
echo $frutas[2]; // Exibe "Manga"

echo "<br>";

// Trabalhando com objetos (POO)
$nascimento = new DateTime(); // Criando um objeto da classe DateTime
var_dump($nascimento); // Exibe detalhes do objeto

echo "<br>";

// Trabalhando com arquivos e Tipos especiais: Resource
$arquivo = fopen("index.php", "r"); // Abre um arquivo em modo leitura ("r")
var_dump($arquivo); // Exibe detalhes sobre o recurso do arquivo

echo "<br>";

// Tipos especiais: Null
$nulo = null;
var_dump($nulo); // Exibe NULL
// Null e vazio são conceitos diferentes

?>
