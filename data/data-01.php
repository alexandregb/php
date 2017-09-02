
<?php

echo date("d/m/Y H:i:s");

echo "<br>";

echo time(); // quantidade de segundos desde 01/01/1974

echo "<br>";
//$ts = strtotime("2001-09-11");// converte a data em timestamp

//$ts = strtotime("now");// converte a data em timestamp de hoje

//$ts = strtotime("+1 day");// converte a data em timestamp e adiciona 1 dias

$ts = strtotime("+1 week");// converte a data em timestamp e adiciona 1 dias

echo "<br>";
echo date("l, d/m/Y",$ts );
?>
		
		