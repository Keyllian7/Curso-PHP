<?php

// Estrutura hierárquica de cargos da empresa em formato de array associativo.
$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Início: Diretor Comercial
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => array(
                    // Início: Gerente de Vendas (subordinado ao Diretor Comercial)
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                    // Término: Gerente de Vendas
                )
            ),
            // Término: Diretor Comercial
            // Início: Diretor Financeiro
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    // Início: Gerente de Contas a Pagar (subordinado ao Diretor Financeiro)
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            // Início: Supervisor de Pagamentos (subordinado ao Gerente de Contas a Pagar)
                            array(
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            )
                            // Término: Supervisor de Pagamentos
                        )
                    ),
                    // Término: Gerente de Contas a Pagar
                    // Início: Gerente de Compras (subordinado ao Diretor Financeiro)
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            // Início: Supervisor de Suprimentos (subordinado ao Gerente de Compras)
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                'subordinados' => array(
                                    // Funcionário subordinado ao Supervisor de Suprimentos
                                    array(
                                        'nome_cargo' => 'Funcionário'
                                    )
                                )
                            )
                            // Término: Supervisor de Suprimentos
                        )
                    )
                    // Término: Gerente de Compras
                )
            )
        )
    )
);

// Função recursiva para exibir os cargos hierárquicos em formato de lista HTML.
function exibir($cargos) {
    // Inicia uma lista não ordenada (<ul>)
    $html = '<ul>';

    // Itera sobre cada cargo na hierarquia
    foreach ($cargos as $cargo) {
        // Cria um item de lista (<li>) com o nome do cargo
        $html .= "<li>";

        $html .= $cargo['nome_cargo'];

        // Verifica se o cargo tem subordinados
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            // Se houver, chama a função de forma recursiva para exibir os subordinados
            $html .= exibir($cargo['subordinados']);
        }

        // Fecha o item de lista (<li>)
        $html .= "</li>";
    }

    // Fecha a lista não ordenada (<ul>)
    $html .= '</ul>';

    return $html;
}

echo exibir($hierarquia);

?>
