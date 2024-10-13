<?php

$dia = date("w"); // Obtém o número do dia da semana (0 = Domingo, 6 = Sábado)
# (echo $dia;)

switch ($dia) {
    case 0:
        echo "Domingo";
        break;
    case 1: 
        echo "Segunda-feira";
        break;
    case 2: 
        echo "Terça-feira";
        break;    
    case 3: 
        echo "Quarta-feira";
        break;
    case 4: 
        echo "Quinta-feira";
        break;
    case 5: 
        echo "Sexta-feira";
        break;
    case 6: 
        echo "Sabádo";
        break;
        
    default:
        echo "Data Inválida";
        break;
}

?>