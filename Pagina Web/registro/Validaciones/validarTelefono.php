<?php
if (!empty($telefono)) {
	$numeroCaracteres = strlen($telefono);
	if($numeroCaracteres > 20) {
		echo "El telefono es demasiado largo";
		$error = true;
	} 
} else if(isset($telefono)) {
	echo "Este campo esta vacio";
	$error = true;
}

if(isset($missatgeTelefono)) {
	print($missatgeTelefono) ;
}
?>