<?php
include_once '../seguretat.php';
include_once '../../registro/Usuaris.php';

$usuaris = new Usuaris();
error_reporting(0);
$username=$_POST['username'];
$nombre=$_POST['nombre'];
$apellidos = $_POST['apellidos'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$password=$_POST['password'];
?>

<!DOCTYPE html>
<html lang="es">
<head>  

  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
  <img class = "imagensecond" src="../../Imagenes/logoo.png">

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/registro.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/admin.css">


  <link rel="shortcut icon" href="../../Imagenes/secondhome.ico" />
  <title>SECOND HOME STUDIO</title>
</head>
<div class = "contenedorRegistro">
<h1 id="tituloAdmin">Bienvenido <?php  echo $_SESSION['username'];  ?></h1>

<h2 id = "titulos">Cambiar datos de usuario</h2>
<div class = "formulario">
<form action="admin.php" method ="POST">
  <h2>Introduce usuario del que quieres cambiar datos</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <hr>
  <br>
  <br>
  <span>USERNAME NUEVO:          </span><input type="text" name="usernameNuevo">
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
<input type="submit" value="Actualizar Datos" name="actualizardatos" id="boton">

</form>
</div>
<h2 id = "titulos">Convertir Usuario a Premium</h2>
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
<h2 id = "titulos">Convertir Usuario a Normal</h2>
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
<h2 id = "titulos">Eliminar Usuario</h2>
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
  <h2 id = "titulos">Lista Usuarios</h2>
  <table class="tablaUsuarios">
	  <tr>
		  <td><b>Username</b></td>
		  <td><b>Nombre</b></td>
		  <td><b>Apellidos</b></td>
		  <td><b>Telefono</b></td>
		  <td><b>Correo</b></td>
		  <td><b>Premium</b></td>
	
  <?php 

	$resTodo = $usuaris->getAll();
  
foreach($resTodo as $usuarios){
	?>
	
	<?php
	echo "<tr>"; 
		echo "<td>".$usuarios['username']."</td>";
		echo "<td>".$usuarios['nombre']."</td>";
		echo "<td>".$usuarios['apellidos']."</td>";
		echo "<td>".$usuarios['telefono']."</td>";
		echo "<td>".$usuarios['correo']."</td>";
		echo "<td>".$usuarios['premium']."</td>";
		echo "</tr>"; 
		
		
}

		
	

  ?>
 
</table>
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

