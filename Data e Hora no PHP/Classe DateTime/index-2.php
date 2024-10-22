<?php
// Cria um novo objeto DateTime com a data e hora atuais
$dt = new DateTime();

// Exibe a data e hora atuais
echo $dt->format("d/m/Y H:i:s");

// Cria um intervalo de 15 dias (P15D = Period of 15 Days)
$periodo = new DateInterval("P15D");

// Adiciona o intervalo de 15 dias à data atual
$dt->add($periodo);

echo "<BR>"; 

// Exibe a nova data após adicionar o intervalo de 15 dias
echo $dt->format("d/m/Y H:i:s");

/*
DateInterval é utilizado para representar períodos de tempo.
"P15D" significa "Período de 15 Dias
*/
?>