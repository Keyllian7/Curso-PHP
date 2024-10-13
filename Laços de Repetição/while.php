<?php

$condição = true; // Define uma condição inicial como verdadeira

// O loop while continua enquanto a condição for verdadeira.
// Esse tipo de loop é útil quando não se sabe o número exato de iterações.

while ($condição) {

    $numero = rand(1, 10);
    if ($numero === 7) {
        
        echo "Sete! ";
        $condição = false;

    }
    echo $numero ."<br>";
}

?>