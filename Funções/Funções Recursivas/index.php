<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                )
            ),
            array(
                'nome_cargo' => 'Diretor de Marketing',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Publicidade'
                    )
                )
            )
        )
    )
);

// Função recursiva para exibir hierarquia
function exibirHierarquia($cargos) {
    echo '<ul>';
    foreach ($cargos as $cargo) {
        echo '<li>' . $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && is_array($cargo['subordinados'])) {
            exibirHierarquia($cargo['subordinados']);
        }
        echo '</li>';
    }
    echo '</ul>';
}

// Exibir a hierarquia
exibirHierarquia($hierarquia);

?>
