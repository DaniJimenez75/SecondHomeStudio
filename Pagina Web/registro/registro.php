<?php
include_once 'indexRegistro.php';

error_reporting(0);
$username=$_POST['username'];
$nombre=$_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$password=$_POST['password'];
$error = false;	
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<img class = "imagensecond" src="../Imagenes/logoo.png ">
	<h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Fuentes.css">
		<link rel="stylesheet" type="text/css" href="../CSS/registro.css">

	<meta charset="UTF-8">
	<title>SECOND HOME STUDIO</title>
</head>
<body>
	<div class = "contenedorRegistro">
	<h1 id = "tituloRegistro">REGISTRO</h1>
	<div class = "formulario">
<form action="registro.php" method ="POST">


<!--NIF-->
<span>USERNAME:          </span><input type="text" name="username">
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
<br>
<br>


<!--Nombre-->
<span>Nombre:          </span><input type="text" name="nombre">
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
<br>
<br>


<!--Apellidos-->
<span>Apellidos:       </span><input type="text" name="apellidos">
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
<br>
<br>


<!--Telefono-->
<span>Telefono:        </span><input type="tel" name="telefono">
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
<br>
<br>


<!--Correo Electronico-->
<span>Correo electronico:            </span><input type="email" name="correo">
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
<br>
<br>


<!--Contraseña-->
<span>Contraseña            </span><input type="password" name="password">
<?php
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
<br>
<br>
<span>Confirmar Contraseña            </span><input type="password" name="passwordConfirm">


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

<br>
<br>
<input type="submit" value="Registrarse" name="boton" id="boton">
<input type="button" value="Volver a la pagina" name="boton" id="botonVolver" onclick="location.href='QueEsSecondHome.html'">
	</form>
</div>
</div>
</body>
</html>



