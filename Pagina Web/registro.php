<!DOCTYPE html>
<html lang="es">
<head>
	<img class = "imagensecond" src="Imagenes/logoo.png ">
	<h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1, width=device-width">
	<link rel="stylesheet" type="text/css" href="CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="CSS/Fuentes.css">
		<link rel="stylesheet" type="text/css" href="CSS/registro.css">

	<meta charset="UTF-8">
	<title>SECOND HOME STUDIO</title>
</head>
<body>
	 <div class = "contenedorRegistro">
	<h1 id = "tituloRegistro">REGISTRO</h1>
	<div class = "formulario">
<form action="registro.php" method ="POST">
<span>NIF/NIE:          </span><input type="text" name="nif">
<br>
<br>

<span>Nombre:          </span><input type="text" name="nombre">
<br>
<br>

<span>Apellidos:       </span><input type="text" name="apellidos">
<br>
<br>

<span>Telefono:        </span><input type="text" name="telefono">
<br>
<br>
<span>Correo electronico:            </span><input type="text" name="correo">
<br>
<br>
<span>Contraseña            </span><input type="text" name="password">
<br>
<br>
<input type="submit" value="enviar" name="boton">
	</form>
</div>
</div>
</body>
</html>

<?php
error_reporting(0);
try {
	$usuaris="root";
	$password="";
	$bd = new PDO('mysql:host=localhost;dbname=secondhome', $usuaris, $password);
} catch (PDOException $e) {
	print "Error: ". $e->getMessage() . "<br/>";
	die();
}


if($_POST['boton']) {

$nif=$_POST['nif'];
$nombre=$_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$password=$_POST['password'];

$sql = "insert into usuarios(nif,nombre,apellidos,telefono,correo,password) values(:nif,:nombre,:apellidos,:telefono,:correo,:password)";
$ordre = $bd->prepare($sql);

$ordre->bindValue(':nif',$nif);
$ordre->bindValue(':nombre',$nombre);
$ordre->bindValue(':apellidos',$apellidos);
$ordre->bindValue(':telefono',$telefono);
$ordre->bindValue(':correo',$correo);
$ordre->bindValue(':password',md5($password));


$ordre->execute();
if ($res) {
	echo "alta correcta";
} else {
	echo "alta incorrecta";
}
	Header('Location:registro.php');
}
?>