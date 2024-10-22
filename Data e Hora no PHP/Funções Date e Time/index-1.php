<?php

// Exibindo uma data e hora a partir de um timestamp específico (1729564270)
echo date("d/m/Y <br> H:i:s", 1729564270);

/*
Formato:
d = dia (numérico)
m = mês (numérico)
Y = ano com 4 dígitos
H = hora (formato 24h)
i = minutos
s = segundos
*/

echo "<br>";

// Pega o timestamp atual (segundos desde 1º de janeiro de 1970)
echo time();

?>