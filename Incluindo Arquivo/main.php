<?php

/* 

(#) são códigos comentados 
(//) são comentários de explicação

*/ 

#(include "index-1.php";)             --->   // Importa o arquivo index-1.php, assumindo que esteja no mesmo diretório
#(include "Functions/index-3.php";)   --->   // Importa um arquivo dentro de uma subpasta 'Functions' do diretório atual
#("../Function/index-3.php";)         --->   // Usa (../) para voltar um diretório e procurar a subpasta 'Function' e o arquivo desejado

require "Inc/function-2.php"; // Usando Require

// - Require: O arquivo deve obrigatoriamente existir e funcionar corretamente. Caso contrário, um erro fatal é gerado.

/* - Include: Mesmo se o arquivo não existir ou não funcionar perfeitamente, ele ainda tenta processar o restante do script. 
  Include também oferece mais recursos de path, sendo melhor para projetos internos. No entanto, o uso de include remoto 
  pode ser perigoso se o arquivo estiver comprometido com malware ou manipulação de dados.
*/

  require_once "Inc/function-2.php"; // 'require_once' garante que o arquivo seja incluído apenas uma vez, evitando erros de múltiplas inclusões
#(include_once)   --->   tem a mesma função de prevenção de laços desnecessários)

$resultado = somar(10, 20);

echo $resultado;

?>