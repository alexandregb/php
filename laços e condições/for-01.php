<?php

echo "<select>";
//(valor inicial; condição; incremento)
for($i = date("Y"); $i > date("Y") - 100; $i--){


		echo 	'<option value="'.$i.'">'.$i.'</optin>';
		
	
	
}

echo "</select>";


?>