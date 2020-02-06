<?php
if (!empty($correo)) {
	$numeroCaracteres = strlen($correo);
	if($numeroCaracteres > 50) {
		echo "El correo es demasiado largo";
		$error = true;
	} 
} else if(isset($correo)) {
	echo "Este campo esta vacio";
	$error = true;
}

if(isset($missatgeCorreo)) {
	print($missatgeCorreo) ;
}
?>