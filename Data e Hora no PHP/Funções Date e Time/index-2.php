<?php

// $ts = strtotime("2001-09-11"); Converte uma data específica (11 de setembro de 2001) para timestamp

$ts = strtotime("+1 week"); // Também aceita expressões como "+1 day", "+2 months", etc.

echo date("l, d/m/Y", $ts) // Exibe a data calculada (dia da semana, dia, mês e ano)
// l = dia da semana (nome completo)

?>