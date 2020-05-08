<?php
error_reporting(0);
include_once 'seguretat.php';
include_once '../registro/Usuaris.php';
$error = false;
$usuaris = new Usuaris();
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
  <a class="boton_login" href="desconnectar.php">Desconnectar</a>
 
  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../CSS/registro.css">
  <link rel="stylesheet" type="text/css" href="../CSS/usuarios.css">
  <link rel="shortcut icon" href="../Imagenes/secondhome.ico" />


  <title>SECOND HOME STUDIO</title>
</head>



<body>

<div class = "contenedorRegistro">
<h1 class="titulo">Ajustes del usuario: <?php  echo $_SESSION['username'];  ?> </h1>

<div class = "formulario">
<form action="ajustesUsuario.php" method ="POST">
  <h2>Introduce nuevo nombre de usuario</h2>
  
  <span>USERNAME:          </span><input type="text" name="username">
  <span>Confirmar USERNAME:          </span><input type="text" name="usernameConfirmar">

  <br>
  <br>
  <?php
  /* CAMBIAR USERNAME */
include_once '../registro/Validaciones/validarUsername.php';
  if($_POST['cambiarusername'] && !$error) {	
    /* SI COINCIDEN LOS 2 CAMPOS */
    if(strcmp($_POST['username'], $_POST['usernameConfirmar'])==0){
        $usuaris->actualizarUsername($usuaris);
        $_SESSION['username'] = $_POST['username'];
        header('Location: ajustesUsuario.php');
    } else {
      echo "Los usuarios no coinciden";
        $error = true;
       
    }
  } 
  ?>
  <input type="submit" value="Cambiar Username" name="cambiarusername" id="boton">

  <br>
  <br>
</form>
</div>
<br>
<br>
<div class = "formulario">
<form action="ajustesUsuario.php" method ="POST">
  <h2>Introduce nuevo telefono</h2>
  
  <span>TELEFONO:          </span><input type="tel" name="telefono">
  <span>Confirmar TELEFONO:          </span><input type="tel" name="telefonoConfirmar">

  <br>
  <br>
  <input type="submit" value="Cambiar Telefono" name="cambiartelefono" id="boton">
  <?php
   /* CAMBIAR TELEFONO */
include_once '../registro/Validaciones/validarTelefono.php';

  if($_POST['cambiartelefono'] && !$error) {	
        /* SI COINCIDEN LOS 2 CAMPOS */

    if(strcmp($_POST['telefono'], $_POST['telefonoConfirmar'])==0){
        $usuaris->actualizarTelefono($usuaris);     
        header('Location: ajustesUsuario.php');
    } else {
      echo "Los telefonos no coinciden";
        $error = true;
       
    }
  } 
  ?>


  <br>
  <br>
</form>
</div>
<br>
  <br>
<div class = "formulario">
<form action="ajustesUsuario.php" method ="POST">
  <h2>Introduce nuevo correo</h2>
  
  <span>CORREO:          </span><input type="email" name="correo">
  <span>Confirmar CORREO:          </span><input type="email" name="correoConfirmar">

  <br>
  <br>
  <input type="submit" value="Cambiar Correo" name="cambiarcorreo" id="boton">
  <?php
  /*CAMBIAR CORREO */
include_once '../registro/Validaciones/validarCorreo.php';
  if($_POST['cambiarcorreo'] && !$error) {	
    
     /* SI COINCIDEN LOS 2 CAMPOS */
    if(strcmp($_POST['correo'], $_POST['correoConfirmar'])==0){
        $usuaris->actualizarCorreo($usuaris);     
        header('Location: ajustesUsuario.php');
    } else {
      echo "Los correos no coinciden";
        $error = true;
       
    }
  } 
  ?>


  <br>
  <br>
</form>
</div>

<br>
  <br>
<div class = "formulario">
<form action="ajustesUsuario.php" method ="POST">
  <h2>Introduce nueva contraseña</h2>
  
  <span>CONTRASEÑA:          </span><input type="password" name="password">
  
  <span>Confirmar CONTRASEÑA:          </span><input type="password" name="passwordConfirmar">

  <br>
  <br>
  <input type="submit" value="Cambiar Contraseña" name="cambiarcontraseña" id="boton">
  <?php
  include_once '../registro/Validaciones/validarContraseña.php';
  /* CAMBIAR CONTRASEÑA */
  if($_POST['cambiarcontraseña'] && !$error) {	
    
     /* SI COINCIDEN LOS 2 CAMPOS */
    if(strcmp($_POST['password'], $_POST['passwordConfirmar'])==0){
        $usuaris->actualizarContraseña($usuaris);     
        header('Location: ajustesUsuario.php');
    } else {
      echo "Las contraseñas no coinciden";
        $error = true;
       
    }
  } 
  ?>


  <br>
  <br>
</form>
</div>

</div>



</body>
</html>