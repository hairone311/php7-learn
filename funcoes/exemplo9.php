<?php
/**
 *  Funções Recursivas
 */

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            // Inicio: Director Comercial
            array(
                'nome_cargo' => 'Director Comercial',
                'subordinados' => array(
                    // Inicio: Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de Vendas',
                    ),
                    // Fim: Gerente de Vendas
                ),
            ),
            // Fim: Director Comercial

            // Inicio: Director Financeiro
            array(
                'nome_cargo' => 'Director Financeiro',
                'subordinados' => array(
                    // Inicio: Gerente de Contas
                    array(
                        'nome_cargo' => 'Gerente de Contas',
                        'subordinados' => array(
                            // Inicio: Supervisor
                            array(
                                'nome_cargo' => 'Supervisor',
                            ),
                            // Fim: Supervisor
                        ),
                    ),
                    // Fim: Gerente de Contas

                    // Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Contas',
                        'subordinados' => array(
                            // Inicio: Supervisor de Suprimentos
                            array(
                                'nome_cargo' => 'Supervisor de Suprimentos',
                                // Inicio: Funcionário
                                'subordinados' => array(
                                    array(
                                        'nome_cargo' => 'Funcionário',
                                    ),
                                ),
                                // Fim: Funcionário
                            ),
                            // Fim: Supervisor de Suprimentos
                        ),
                    ),
                    // Fim: Gerente de Compras
                ),
            ),
            // Fim: Director Financeiro
        ),
    ),
);

function exibe($cargos) {
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);