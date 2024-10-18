<?php

// Exemplo 1: Passagem de Valor
$a = 10;

function trocarValor($a) {
    $a += 50; 
    return $a; 
}

echo trocarValor($a); // Saída: 60
echo $a; // Saída: 10

// Explicação: Como o parâmetro é passado por valor, a variável original não é alterada.
echo "<br><hr>";


// Exemplo 2: Passagem por Referência
// O símbolo (&) permite que o valor seja passado por referência, o que significa que qualquer alteração feita na variável dentro da função afetará diretamente a variável original
$b = 40;

function trocarValor2(&$b) {
    $b += 10; 
    return $b; 
}

echo trocarValor2($b); // Saída: 50
echo trocarValor2($b); // Saída: 60
echo $b; // Saída: 60

// Explicação: Como o parâmetro é passado por referência, a variável original é alterada.
echo "<br><hr>";


// Exemplo 3: Referência em Arrays (foreach com referência)
$pessoas = array(
    'nome' => 'João',
    'idade' => 20
);

foreach ($pessoas as &$pessoa) {
    if (gettype($pessoa) === 'integer') $pessoa += 10;

    echo $pessoa . "<br>"; // Saída: João 30
}

print_r($pessoas); // Saída: Array ( [nome] => João [idade] => 30 ) Se o símbolo & não estivesse presente, o valor da variável idade permaneceria 20

// Explicação: O foreach com referência altera o array original diretamente.

?>