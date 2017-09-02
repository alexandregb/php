
<?php

setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8","portuguese");
date_default_timezone_set('America/Sao_Paulo'); // define timezone
echo date("d/m/Y H:i:s");


echo "<br>";
$dataHoje = strftime('%A, %d de %B de %Y', strtotime('today'));
 
echo $dataHoje;

echo "<br>";

echo ucwords(strftime("%A %B")) ;// converte a data em timestamp e adiciona 1 dias

echo "<br>";

?>
		
		