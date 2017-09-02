<?php

//diferença das aspas
//Strings
$nome = "Alexandre ";


$nome2 = 'aspas simples' ;


var_dump($nome,$nome2);


echo "</br>";

echo " ABC $nome ";

echo "</br>";

echo  'Com aspas simples $nome' ;
echo "</br>";

$nomeQualquer = "joao rangel";
// tudo para maiusculo
$nomeQualquer = strtoupper($nomeQualquer);
echo  $nomeQualquer."</br>" ;


//tudo minusculo
$nomeQualquer = strtolower($nomeQualquer)."</br>" ;
echo $nomeQualquer."</br>";

//primeira letra maiuscula
echo  ucfirst($nomeQualquer)."</br>" ;
echo "</br>";

//todas as palavras primeira letra maiuscula
echo  ucwords($nomeQualquer) ;
echo "</br>";

//substituir as letras
$nomeQualquer = str_replace("o", "0", $nomeQualquer);
$nomeQualquer = str_replace("e", "3", $nomeQualquer);

echo  $nomeQualquer;
echo "</br>";

//posição de letras na palavra
$frase = "A repetição é mãe da retenção";
$palavra = "mãe";
$q = strpos($frase, $palavra );

var_dump($q);

//extraçao de palavra num texto
$texto = substr($frase, 0, 17);

var_dump($texto );

//conta caracteres
$texto2 = substr($frase, $q + strlen($palavra ), strlen($frase ));

var_dump($texto2 );
?>