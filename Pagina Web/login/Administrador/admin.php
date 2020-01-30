<?php
include_once '../seguretat.php';
include_once '../../registro/Usuaris.php';

$usuaris = new Usuaris();
error_reporting(0);
 
?>

<!DOCTYPE html>
<html lang="es">
<head>  

  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/registro.css">

  <link rel="shortcut icon" href="../../Imagenes/secondhome.ico" />
  <title>SECOND HOME STUDIO</title>
</head>
<div class = "contenedorRegistro">
<h1 id="tituloBienvenida">Bienvenido <?php  echo $_SESSION['username'];  ?></h1>

<h2 id = "titulo2">Cambiar datos de usuario</h2>
<div class = "formulario">
<form action="admin.php" method ="POST">
  <h2>Introduce usuario del que quieres cambiar datos</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <hr>
  <br>
  <br>
  <span>USERNAME NUEVO:          </span><input type="text" name="usernameNuevo">
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
<input type="submit" value="Actualizar Datos" name="actualizardatos" id="boton">

</form>
</div>
<h2 id = "titulo2">Convertir Usuario a Premium</h2>
<div class = "formulario">
<form action="admin.php" method ="POST">
  <h2>Introduce usuario que quieres que se convierta en Premium</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <br>
  <br>
  <input type="submit" value="Convertir a Premium" name="convertirpremium" id="boton">

  <br>
  <br>
</form>
</div>
<h2 id = "titulo2">Convertir Usuario a Normal</h2>
<div class = "formulario">
<form action="admin.php" method ="POST">
  <h2>Introduce usuario que quieres que se convierta en Normal</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <br>
  <br>
  <input type="submit" value="Convertir a Normal" name="convertirnormal" id="boton">

  <br>
  <br>
</form>
</div>
<h2 id = "titulo2">Eliminar Usuario</h2>
<div class = "formulario">
<form action="" method ="POST">
  <h2>Introduce usuario que quieres eliminar</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <br>
  <br>
  <input type="submit" value="Eliminar Usuario" name="eliminarUsuario" id="boton">

  <br>
  <br>
</form>
</div>  
<br>
  <br>
		
<input type="button" value="Cerrar Sesión" name="boton" id="botonVolver" onclick="location.href='../desconnectar.php'">

</div>
</body>
</html>
<?php


  if($_POST['actualizardatos']) {
	  if(!$error){
		$usuaris->update($usuaris);
	  }	
    
  } 


		if($_POST['convertirpremium']) {	
			$usuaris->cambiarAPremium($usuaris);
		  }
		if($_POST['convertirnormal']) {	
			$usuaris->cambiarANormal($usuaris);
		  }
		  if($_POST['eliminarUsuario']) {
			  $username = $_POST['username'];	
			$usuaris->borrar($username);
		  }
	 

		 
		

?>

