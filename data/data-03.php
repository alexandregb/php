
<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");
date_default_timezone_set('America/Sao_Paulo'); // define timezone

$dt = new DateTime();
$periodo = new DateInterval("P1D");

echo $dt->format("d/m/Y H:i:s");

echo "<BR>";

$dt->add($periodo);

echo $dt->format("d/m/Y H:i:s");
echo "<BR>";

echo $dt->format("l, d/m/Y H:i:s");

?>
		
		