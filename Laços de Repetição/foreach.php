<?php

$meses = array(
"Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
"Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
);

// Estrutura foreach: usada para iterar sobre arrays e objetos sem precisar de controle manual do índice

foreach ($meses as $index => $mes) {
    echo "Indice: $index: ";
    echo "O mês é $mes <br>";
}

?>

<form>
    <input type="text" name="Nome">
    <input type="date" name="Nascimento">
    <input type="submit" value="OK">
</form>

<?php
if (isset($_GET)) { // ---> Verifica se existem dados enviados via GET (após submissão do formulário)

    // Itera sobre os dados recebidos do formulário
    foreach ($_GET as $key => $value) {
        echo "Nome do campo: $key <br>";
        echo "Valor do campo: $value";
        echo "<hr>";
    }
}
?>