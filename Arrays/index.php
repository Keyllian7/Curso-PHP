<?php

// Exemplo de um array simples (vetor)
$frutas = array("Laranja", "Abacaxi", "Banana");

print_r($frutas); //  (print_r) ---> Exibe o array e sua estrutura completa
echo "<br>";

// Exemplo de um array bidimensional (matriz)
$carros[0][0] = "GM";
$carros[0][1] = "Cobalt";
$carros[0][2] = "Onix";
$carros[0][3] = "Camaro";

$carros[1][0] = "Ford";
$carros[1][1] = "Fiesta";
$carros[1][2] = "Fusion";
$carros[1][3] = "Eco Sport";

echo $carros[0][3]; 
echo "<br>";

// (função end) ---> Exibe o último item do array 
echo end($carros[1]); 
echo "<br>";

// Exemplo de um array associativo
$pessoas = array();

// (array_push) ---> Adiciona um array associativo a um array
array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'Lucas',
    'idade' => 28
));

print_r($pessoas);

echo "<hr>";

print_r($pessoas[0]['nome']);

?>
