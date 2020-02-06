<?php
include_once '../seguretat.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>  	
  <a class="boton_login" href="../desconnectar.php">Desconnectar</a>
  <a class="boton_login" href="../ajustesUsuario.php">Ajustes Usuario</a>



  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../../CSS/EstructuraPrincipal.css">
	<link rel="stylesheet" type="text/css" href="../../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/registro.css">
  <link rel="stylesheet" type="text/css" href="../../CSS/usuarios.css">
  <link rel="shortcut icon" href="../../Imagenes/secondhome.ico" />


  <title>SECOND HOME STUDIO</title>
</head>



<body>
<h1 class="titulo">Bienvenido <?php  echo $_SESSION['username'];  ?> 
<input type="button"  class="boton_personalizado" value="?" onclick="ajuda()"> </h1>
	<header>
	<nav>
		<ul class = "menu">
			<li><a> HIP HOP </a></li>
			<li><a> TWERK </a></li>
			<li><a> DANCEHALL </a>
			<li><a> POPPING </a>  
			<li><a> VOGUE </a></li>
			<li><a>HOUSE & SHUFFLE</a>
							
	</nav>
</header>


	
<div class="nou" id="ayuda">
<H2>Premium</H2>
Aqui encontraras unos videos de corta duracion de las clases, para ver el video completo tendras que hacerte premium y podras ver todas las clases y sus videos completos. Si quieres ser premium haz click aqui
</div>	

<script type="text/javascript">
	function ajuda(){
		if(document.getElementById('ayuda').style.display=="block")
			document.getElementById('ayuda').style.display="none"
		else
			document.getElementById('ayuda').style.display="block"
	}
</script>




</body>
</html>