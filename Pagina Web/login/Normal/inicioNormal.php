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
		<ul class = "menuUsuarios">
		<?php
		echo "<li><a href='inicioNormal.php?pagina=hiphopNormal'>
					 HIP HOP</a></li>";
					 
		echo "<li><a href='inicioNormal.php?pagina=twerkNormal'>
					 TWERK</a></li>";
	    echo "<li><a href='inicioNormal.php?pagina=dancehallNormal'>
					DANCEHALL</a></li>";
	    echo "<li><a href='inicioNormal.php?pagina=poppingNormal'>
					POPPING</a></li>";
		echo "<li><a href='inicioNormal.php?pagina=waackingNormal'>
					WAACKING & VOGUE</a></li>";
		echo "<li><a href='inicioNormal.php?pagina=houseNormal'>
					HOUSE & SHUFFLE</a></li>";
					 
					 
					 ?>
		
							
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


<?php
if(isset($_GET['pagina'])){
	if(strcmp($_GET['pagina'], 'hiphopNormal')==0){
		include_once 'Paginas/HipHopNormal.php';
	}
	if(strcmp($_GET['pagina'], 'twerkNormal')==0){
		include_once 'Paginas/twerkNormal.php';
	}
	if(strcmp($_GET['pagina'], 'dancehallNormal')==0){
		include_once 'Paginas/dancehallNormal.php';
	}
	if(strcmp($_GET['pagina'], 'poppingNormal')==0){
		include_once 'Paginas/poppingNormal.php';
	}
	if(strcmp($_GET['pagina'], 'waackingNormal')==0){
		include_once 'Paginas/waackingNormal.php';
	}
	if(strcmp($_GET['pagina'], 'houseNormal')==0){
		include_once 'Paginas/houseNormal.php';
	}
}
?>

</body>
</html>