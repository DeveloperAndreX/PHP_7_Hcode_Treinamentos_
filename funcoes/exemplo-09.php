<?php
// array Bidimensional: 

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' =>array(
            // Inicio Diretor Comercial:
            array(
                'nome_cargo'=>'Diretor Comercial',
                'subordinados' =>array(
                    // inicio Gerente de Vendas
                    array(
                        'nome_cargo' => 'Gerente de vendas'
                    )
                    // Termino Gerente de Vendas
                )
            ),
            // Termino Diretor Comercial
            // Inicio Diretor Financeiro:
            
            array(
                'nome_cargo' => 'Diretor Fianceiro',
                'subordinados'=>array(
                    // Inicio de Gerente de Contas a Pagar
                    array(
                        'nome_cargo'=>'Gerente de Contas a Pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de Pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'

                            )
                            //Termino: Supervisor de Pagamentos
                        )
                    ),
                    // Termino: de Gerente de Contas a Pagar
                    //Inicio: Gerente de Compras
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' =>array(
                        // Inicio: Supervisor de Suprimentos
                        array(
                            'nome_cargo'=>'Supervisor de Suprimentos',
                            'subordinados'=>array(
                                array(
                                    'nome_cargo'=>'funcionario'
                                )
                            )
                        )
                        // Termino: Supervisor de Suprimentos
                        )

                    )
                    //Termino: Gerente de Compras
                )

            )
            // Termino Diretor Financeiro.
        )
    )
);

function exibe($cargos){
  
$html = '<ul>';

foreach ($cargos as $cargo) {

$html .= "<li>";

$html .= $cargo['nome_cargo'];

$html  .= "</li>";

if(isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
    $html .= exibe($cargo['subordinados']);

}
}

$html .= "</ul>";

return $html;

}

echo exibe($hierarquia);



?>