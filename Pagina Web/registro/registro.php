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
	include_once '../../registro/Validaciones/validarUsername.php';

?>
<br>
<br>


<!--Nombre-->
<span>Nombre:          </span><input type="text" name="nombre">
<?php
	include_once '../../registro/Validaciones/validarNombre.php';

?>
<br>
<br>


<!--Apellidos-->
<span>Apellidos:       </span><input type="text" name="apellidos">
<?php
	include_once '../../registro/Validaciones/validarApellidos.php';

?>
<br>
<br>


<!--Telefono-->
<span>Telefono:        </span><input type="tel" name="telefono">
<?php
	include_once '../../registro/Validaciones/validarTelefono.php';

?>
<br>
<br>


<!--Correo Electronico-->
<span>Correo electronico:            </span><input type="email" name="correo">
<?php
	include_once '../../registro/Validaciones/validarCorreo.php';

?>
<br>
<br>


<!--Contraseña-->
<span>Contraseña            </span><input type="password" name="password">
<?php
	include_once '../../registro/Validaciones/validarContraseña.php';

?>
<br>
<br>
<span>Confirmar Contraseña            </span><input type="password" name="passwordConfirm">
<?php
	include_once '../../registro/Validaciones/validarConfirmarContraseña.php';

?>


<br>
<br>
<input type="submit" value="Registrarse" name="boton" id="boton">
<input type="button" value="Volver a la pagina" name="boton" id="botonVolver" onclick="location.href='../QueEsSecondHome.html'">
	</form>
</div>
</div>
</body>
</html>



