
<?php

function soma(int ...$valores):string{
	return array_sum($valores);
}

echo soma(2,2);
echo "<br>";

var_dump(soma(25,23)) ;
echo "<br>";
echo soma(1.5,3.2);
echo "<br>";


?>
		
		