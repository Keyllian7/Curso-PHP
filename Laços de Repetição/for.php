<?php

// For ---> Útil para loops com um número definido de iterações, onde você controla o índice.
for ($i = 0; $i <= 1000; $i += 5) {

    if($i >= 200 && $i <= 800) continue; // Pula uma condição no loop

    if ($i === 900) break; // Finaliza o loop
    
    echo "Dia $i <br>";
}

/*
Exemplo de loop infinito:
for ($n = 0; $n < 10; $n--) { 
    echo $n;
}
*/

echo "<select>";

// Gera um dropdown com os últimos 100 anos a partir do ano atual
for ($a = date("Y"); $a > date("Y")-100; $a--) {
    echo '<option value="'.$a.'">'.$a.'</option>'; // Cria uma opção para cada ano
}

echo "</select>";
?>