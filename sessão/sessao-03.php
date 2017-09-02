
<?php

session_id('e8am8j7rqp8h2of92et1n9j4p7');


require_once("config.php");


// gerar novo sessao para o usuario por segurança
session_regenerate_id();

echo session_id();

var_dump($_SESSION);


echo session_save_path();

echo "<br/>";
var_dump(session_status()) ;
?>