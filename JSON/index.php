<?php

$pessoas = array();

array_push($pessoas, array(
    'nome' => 'João',
    'idade' => 20
));
array_push($pessoas, array(
    'nome' => 'Lucas',
    'idade' => 28
));

echo json_encode($pessoas); // (json_encode) ---> Transforma uma array em JSON

echo "<br><hr>";

$json = '[{"nome":"Jo\u00e3o","idade":20},{"nome":"Lucas","idade":28}]';

// (json_decode) ---> Converte o JSON em um array PHP
$dado = json_decode($json, true); // // O parâmetro 'true' faz com que o JSON seja convertido em array associativo, em vez de objetos
var_dump($dado)
?>