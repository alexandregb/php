
<?php

function teste($callback){
	//processo lento

	$callback();

}

$fn = function($a){

	var_dump($a);
};


teste(function(){

	echo "Terminou!!";
});


$fn("oi");


?>
		
		