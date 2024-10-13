<?php

$a = 1;
$nomes = array("Lucas", "Mariana", "Pedro Souza", "Pedro", "Lucas", "Juliana", "João", "Letícia", "Bruno", "Camila", "Felipe", "Gabriela", "Thiago", "Sofia", "Diego", "Laura", "Gustavo", "Beatriz", "Eduardo", "Alice");
sort($nomes);
$nomes = array_unique($nomes);
foreach ($nomes as $nome) {
    echo "$a - Nome: $nome <br>";
    $a++;
}

?>