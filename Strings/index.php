<?php

$nome = "Keyllian";
$sobrenome = 'Azevedo'; 
$nomeComposto = $nome . " " . $sobrenome;

// Exibindo o nome com aspas duplas (interpreta o valor da variável dentro da string)
echo "Meu nome é $nome"; 
echo "<br>";

// Exibindo o sobrenome com aspas simples (não interpreta o valor da variável dentro da string)
echo 'Meu sobrenome é $sobrenome'; 
echo "<br>";

var_dump($nome, $sobrenome);

echo "<br>";

echo $nome;
echo "<br>";

echo strtoupper($nome); // strtoupper - converte toda a string para maiúsculas
echo "<br>";

echo strtolower($nome); // strtolower - converte toda a string para minúsculas
echo "<br>";

echo ucwords("lucas silva"); // ucwords - capitaliza a primeira letra de cada palavra
echo "<br>";

echo ucfirst("lucas"); // ucfirst - capitaliza apenas a primeira letra da string
echo "<br>";

$empresa = "TCM";
echo $empresa;
echo "<br>";

$empresa = str_replace("C", "P", $empresa); // str_replace - substitui uma substring por outra
echo $empresa;
echo "<br>";

$frase = "A repetição é mãe da retenção.";
$q = strpos($frase, "mãe"); // strpos - busca uma substring e retorna a posição (índice)
var_dump($q);
echo "<br>";

$palavra = "mãe";

$texto = substr($frase, 0, $q); // substr - retorna parte de uma string
var_dump($texto);
echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase)); // strlen - obtém o tamanho da string
var_dump($texto2);
?>
