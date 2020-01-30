<?php
include_once '../seguretat.php';
?>


<!DOCTYPE html>
<html lang="es">
<head>  

  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../..../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/registro.css">

  <link rel="shortcut icon" href="../../Imagenes/secondhome.ico" />
  <title>SECOND HOME STUDIO</title>
</head>
<div class = "contenedorRegistro">
<h1 id="tituloBienvenida">Bienvenido <?php  echo $_SESSION['username'];  ?></h1>
</div>
<br>
<br>

<a href="../desconnectar.php">Desconnectar</a>
</body>
</html>