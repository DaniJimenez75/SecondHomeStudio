<?php
include_once '../seguretat.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>  	
	<a class="boton_login" href="../desconnectar.php">Desconnectar</a>
	<style type="text/css">		
		.nou{
			position: fixed;
			top:300px;
			right:200px;
			background: orange;
			width: 30%;
			border:3px;
			padding: 10px;
			display:none;
		}
		.titulo{
			position: relative;
			width: 60%;
			left: 35%;
			top: -15px;
			font-family: 'Bebas', cursive;
			font-size:50px; 
		}
		.boton_personalizado{
   			padding: 5px;
    		font-size: 15px;
    		top:-15px;
    		position: relative;
    		color: #ffffff;
    		background-color: black;
    		border-radius: 6px;
    		border: 2px solid white;
  }
	</style>

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



<body>

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
<h1 class="titulo">Bienvenido <?php  echo $_SESSION['username'];  ?> 
<input type="button"  class="boton_personalizado" value="?" onclick="ajuda()"> </h1>

	
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