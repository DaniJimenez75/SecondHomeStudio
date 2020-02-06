<?php
if (!empty($apellidos)) {
	$numeroCaracteres = strlen($apellidos);
	if($numeroCaracteres > 50) {
		echo "Los apellidos son demasiado largos";
		$error = true;
	} 
}else if(isset($apellidos)) {
	echo "Este campo esta vacio";
	$error = true;
}
?>