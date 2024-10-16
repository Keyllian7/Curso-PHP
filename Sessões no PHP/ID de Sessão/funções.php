<?php

require_once("config.php");

// Mostra o caminho de arquivos onde a sessão está
echo session_save_path();
echo "<br><hr>";

// Retorna um valor int com o status da seesão, 0 = não existe, 1 = inativa, 2 = ativa
var_dump(session_status());

echo "<br><hr>";


switch(session_status()) {
    case PHP_SESSION_DISABLED:
        echo "As sessões estão desabilitadas!";
        break;

    case PHP_SESSION_NONE:
        echo "Nunhuma sessão existe";
        break;

    case PHP_SESSION_ACTIVE:
        echo "A sessão está ativa";
        break;
};

?>