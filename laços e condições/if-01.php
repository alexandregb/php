<?php

$qualIdade = 125;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;


if($qualIdade < $idadeCrianca ){

	echo "idade de criança";

}else if($qualIdade < $idadeMaior ) {

		echo "Adolescente";

}else if($qualIdade < $idadeMelhor ) {

	echo "adulto";
}else{
	echo "idoso";
}

echo "<br/>";

echo ($qualIdade < $idadeMaior ) ?"menor de idade":"maior de idade";

?>