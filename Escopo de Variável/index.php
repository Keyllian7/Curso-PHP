<?php

$nome = "Keyllian";

function nome_1() {

    global $nome; // Chama a variável global dentro da função
    echo $nome ." Nome 1";
};

function nome_2(){
    
    $nome = "João"; // Não interfere na variável global fora da função caso ela não tenha sido chamada
    echo $nome." Nome 2";
};

nome_1();
echo "<br>";
nome_2();

?>