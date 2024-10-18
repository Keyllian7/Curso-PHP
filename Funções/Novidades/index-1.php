<?php

// Exemplo: Novidades em Funções com Tipos Escalares
function soma(int ...$valores) { // Declaração de tipos escalares com '...'
    return array_sum($valores);
}

echo soma(2, 2); 
echo "<br>";
echo soma(3, 2, 7, 9);
echo "<br>";
echo soma(3.5, 2.5); // Saída: 6 (Ignora a parte decimal devido à declaração de tipo 'int')

?>
