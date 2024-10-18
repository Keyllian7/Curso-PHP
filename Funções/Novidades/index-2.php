<?php

// Exemplo: Função com Tipos Escalares e Tipo de Retorno
function soma(float ...$valores): string { // : string define o tipo do retorno da função
    return (string) array_sum($valores); // Converte o resultado para string
}

echo var_dump(soma(2, 2)); // Saída: string(1) "4"
echo "<br>";
echo soma(3, 2, 7, 9);
echo "<br>";
echo soma(3.5, 2.7); // Saída: 6.2

?>
