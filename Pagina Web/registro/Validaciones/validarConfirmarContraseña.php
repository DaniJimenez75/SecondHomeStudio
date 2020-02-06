
<?php  

if (!empty($password)) {
	if(strcmp($password, $_POST['passwordConfirm'])==0) {
	$numeroCaracteres = strlen($password);
	if($numeroCaracteres > 20) {
		echo "La contraseña es demasiado larga";
		$error = true;
	} 
} else {
	echo "Las contraseñas no coinciden";
	$error = true;
}

}else if(isset($password)) {
	echo "Este campo esta vacio";
	$error = true;
}

?>