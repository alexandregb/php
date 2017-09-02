<?php

$nome = "Alexandre ";
$anoNascimento = 1984;
$sobrenome = "Garcia Bezerra";
$nomeCompleto = $nome." ".$sobrenome;



//apagar variavel
unset($anoNascimento);

// isset verrificar a variavel goi definida
if(isset($anoNascimento)){
	
echo $nome.'</br>';
echo $anoNascimento.'</br>';
} 
else{
		echo $nome.'</br>';
				echo $nomeCompleto.'</br>';

	}


//concantenar

	$nomeCompleto = $nome." ".$sobrenome;


?>