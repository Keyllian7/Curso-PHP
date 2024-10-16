<?php

// Função simples
function falar(){
    return "Olá <br>";
}

$frase = falar();
echo falar();
echo strlen(falar());

function salario(){
    return 1412.00;
}

echo "<br> Keyllian ganha R$ ".(salario()*3);

// Função com parametros, (parametro-1, parametro-2)
function falarNovamente($pessoa = "Steve", $idade = 18) { // Caso eu defina o valor do parametro ele nao se torna mais obrigatorio ao chamar a função, mas vai retornar o valor definido
    return "<br> Oi $pessoa, você tem $idade anos!";
}

echo falarNovamente("Lucas", 20);
echo falarNovamente("Max", 42);
echo falarNovamente();
echo falarNovamente("", 36);
// Caso queira que nao aoreça nada de passa o parametro vazio, ("")
// parametros nao definidos sempre a esquerda para evitar o erro de não definido

echo "<br><hr>";

function andar(){
    
    return $argumentos = func_get_args(); // retorna o numero de argumentos passados a ser chamado na função, dentro de uma array

}

var_dump(andar("dois passos", "cinco passos"));

?>