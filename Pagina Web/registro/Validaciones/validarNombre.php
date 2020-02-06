<?php
if (!empty($nombre)) {

	$numeroCaracteres = strlen($nombre);
	if($numeroCaracteres > 20) {
		echo "El nombre es demasiado largo";
		$error = true;
	} 
}else if(isset($nombre)) {
	echo "Este campo esta vacio";
	$error = true;
}
?>