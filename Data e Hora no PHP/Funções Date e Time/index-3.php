<?php

// Define a localidade para Português do Brasil
setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");

// Exibe o dia da semana e o mês, com as primeiras letras em maiúsculo
echo ucwords(strftime("%A, %B"));

/*
"pt_BR"           -> Português do Brasil (sem especificar encoding)
"pt_BR.utf-8"     -> Português do Brasil com codificação UTF-8
"portuguese"      -> Português genérico (sem especificar país ou encoding)
*/

?>
