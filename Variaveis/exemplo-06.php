<?php

//escopos de varaiveis
//local
$nome = "Alexandre ";

function teste(){

	global $nome;
	echo $nome.'</br>';
}


function teste2(){
	$nome = "glaucio ";
echo $nome." teste 2"."</br>";
}


teste();

teste2();
?>