<?php

function testar($callback){
    // Processo Lento
    $callback();  // Chama a função anônima passada como argumento
}

testar(function(){
    echo "OK";  // Função anônima que imprime "OK"
});

?>