<?php
// Cria um novo objeto DateTime com a data e hora atuais
$dt = new DateTime();

// Exibe a data e hora no formato dia/mês/ano e hora:minuto:segundo
echo $dt->format("d/m/Y H:i:s");

/*
DateTime é uma classe poderosa que representa datas e horas. 
A função format() permite personalizar a exibição da data/hora.
*/
?>
