<?php

$suaIdade = 10;

$idadeCriança = 12;
$idadeMaior = 18;
$idadeAdulto = 60;

// Estrutura condicional If, (Else If) e Else padrão
if ($suaIdade < $idadeCriança) {
    echo "Criança";
} else if ($suaIdade < $idadeMaior) {
    echo "Adolescente";
} else if ($suaIdade < $idadeAdulto) {
    echo "Adulto";
} else {
    echo "Idoso";
}

// Operador ternário para condições simples no PHP
echo "<br>";

echo($suaIdade < $idadeMaior)?"Menor de Idade":"Maior de Idade"
// Sintaxe: (condição) ? "se for verdadeiro" : "se for falso"
?>