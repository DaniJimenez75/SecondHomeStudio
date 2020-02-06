<?php
if (!empty($username)) {
	
	  
	  $numeroCaracteres = strlen($username);
	if($numeroCaracteres > 20) {
		echo "El username es demasiado largo";
		$error = true;
	} 
}else if(isset($username)) {
	echo "Este campo esta vacio";
	$error = true;
}
if(isset($missatgeUsername)) {
	print($missatgeUsername) ;
}

?>