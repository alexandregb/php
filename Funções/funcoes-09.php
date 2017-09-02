
<?php


$hierarquia = array(
	array(
		'nome_cargo'=>'CEO',
		'subordinados'=>array(
			//inicio:Diretor Comercial
			array(
					'nome_cargo'=>'Diretor Comercial',
					'subordinados'=>array(
							//inicio:gerente de vendas
						array(
							'nome_cargo'=> 'Gerente de Vendas'
							)
		//fim:gerente de vendas

						)

				)
			)
		),
	
			//termino diretor comercial

			//inicio diretor finaceiro

			array(
			'nome_cargo'=>'Diretor finaceiro',
			'subordinados'=>array( 
				array(
		//inicio:gerente de contas
						array(
							'nome_cargo'=> 'Gerente de contas',
							'subordinados'=>array( 
		//inicio:supervisor
								array(
							'nome_cargo'=> 'supervisor'

					)
			//fim:supervisor

							),
		//fim:gerente de contas	
		//inicio:gerente de compras
						array(
							'nome_cargo'=> 'Gerente de compras',
							'subordinados'=>array( 
		//inicio:supervisor
								array(
							'nome_cargo'=> 'supervisor de suprimentos'

					)
			//fim:supervisor
							)
		//fim:gerente de compras
				)
						)
		//fim diretor finaceiro

			)
		)
	)
			);



function exibe($cargos){


	$html = "<ul>";

	foreach ($cargos as $cargo) {
		$html .="<li>";
		$html .= $cargo['nome_cargo'];

		if(isset($cargo['subordinados']) && count( $cargo['subordinados'] > 0)){

			$html .= exibe($cargo['subordinados']);
		}
		$html .="</li>";

	}

	$html .= "</ul>";

	return $html;
}

echo exibe($hierarquia);

?>
		
		