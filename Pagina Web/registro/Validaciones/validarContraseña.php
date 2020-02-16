<?php
include_once '../indexRegistro.php';
if (!empty($password)) {
	
	$numeroCaracteres = strlen($password);
	if($numeroCaracteres > 20) {
		echo "La contraseña es demasiado larga";
		$error = true;
	} 


}else if(isset($password)) {
	echo "Este campo esta vacio";
	$error = true;
}
?>