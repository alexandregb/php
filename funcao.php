
<html>
<head>
</head>
<body>
<?  

function minhaFuncaoDobro ($valor) {
 
$valor = $valor * 2;

//$valor *= 2 

return $valor; 
 
 }

$y = minhaFuncaoDobro (3);

echo $y;

$x = 3;

if($x++ == 6 || $x++ == 5 || $x++ == 4) {

  $x = $x;

}

else {

  $x = $x + $x++;

}

echo "<br>".$x;

?>
 </body>
</html>
