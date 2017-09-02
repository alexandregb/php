
<?php

 $pessoas = array ();

  array_push($pessoas,array(
 	'nome'=>'Alexandre',
 	'idade'=>32
 	));

   array_push($pessoas,array(
 	'nome'=>'TOM',
 	'idade'=>2
 	));

echo json_encode($pessoas);
 echo "<br/>";



$json = '[{"nome":"Alexandre","idade":32},{"nome":"TOM","idade":2}]';

$data = json_decode($json, true);

var_dump($data);
?>
		