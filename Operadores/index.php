<?php

// Operadores de Atribuição e Concatenação
$nome = "Keyllian"; // Atribuição (=)
echo $nome . " Azevedo"; // Concatenação (.)
echo "<br>";

$nome .= " Treinamentos"; // Concatena o valor anterior com o novo
echo $nome;
echo "<br>";

// Operadores de Atribuição com Operações
$valorTotal = 0;
$valorTotal += 100; // Adiciona 100 ao valor total
$valorTotal += 50;  // Adiciona 50 ao valor total
echo $valorTotal;
echo "<br>";

$valorTotal -= 25; // Subtrai 25 do valor total
echo $valorTotal;
echo "<br>";

$valorTotal *= 0.9; // Multiplica o valor total por 0.9
echo $valorTotal;
echo "<br>";

// Operadores Aritméticos
$a = 10;
$b = 5;

echo $a - $b; // Subtração
echo "<br>";

echo $a + $b; // Adição
echo "<br>";

echo $a * $b; // Multiplicação
echo "<br>";

echo $a / $b; // Divisão
echo "<br>";

echo $a % $b; // Módulo (resto da divisão)
echo "<br>";

echo $a ** $b; // Exponenciação (a elevado a b)
echo "<br>";

// Operadores de Comparação
$c = 30;
$d = 20;

var_dump($d > $c); // Verifica se $d é maior que $c
echo "<br>";

var_dump($c > $d); // Verifica se $c é maior que $d
echo "<br>";

var_dump($c == $d); // Verifica se $c é igual a $d (comparação de valor)
echo "<br>";

echo $c = $d; // Atribui o valor de $d a $c
echo "<br>";

$e = "12";
var_dump($c === $d); // Verifica se $c é idêntico a $d (mesmo valor e tipo)
echo "<br>";

var_dump($a != $b); // Verifica se $a é diferente de $b (apenas valor)
echo "<br>";

var_dump($a !== $e); // Verifica se $a é diferente de $e (valor ou tipo)
echo "<br>";

// Operador Spaceship (Comparação Completa)
$a = 50;
$b = 35;

var_dump($a <=> $b); // Retorna -1, 0 ou 1 (menor, igual, maior)
echo "<br>";

// Operador Null Coalescing (??)
$a = null;
$b = null;
$c = 10;

echo $a ?? $b ?? $c; // Retorna o primeiro valor não nulo
echo "<br>";

// Operadores de Incremento e Decremento
$a = 10;

echo $a++; // Pós-incremento: incrementa após exibir o valor
echo "<br>";

echo $a;   // Valor após o incremento
echo "<br>";

echo ++$a; // Pré-incremento: incrementa e depois exibe o valor
echo "<br>";

echo $a--; // Pós-decremento: decrementa após exibir o valor
echo "<br>";

echo $a;   // Valor após o decremento
echo "<br>";

echo --$a; // Pré-decremento: decrementa e depois exibe o valor
echo "<br>";

// Ordem de Precedência dos Operadores
$resultado = (10 + 2) / 2; // Parênteses forçam a ordem de execução
echo $resultado;
echo "<br>";

$resultado = (10 + 2) / 2 > 5 && 10 + 5 < 20; // Operador lógico AND (&&) - ambas as condições devem ser verdadeiras
var_dump($resultado);
echo "<br>";

$resultado = (10 + 2) / 2 > 5 || 10 + 5 < 20; // Operador lógico OR (||) - uma das condições deve ser verdadeira
var_dump($resultado);

?>
