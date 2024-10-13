<?php

$total = 100;
$desconto = 0.9;

// Estrutura do-while: Executa o bloco de código pelo menos uma vez

do { 

    $total *= $desconto;

} while ($total > 100);
    echo $total;

?>