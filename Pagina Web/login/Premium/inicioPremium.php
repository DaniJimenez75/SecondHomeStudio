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

	<header>
	<nav>
		<ul class = "menuUsuarios">
		<?php
		echo "<li><a href='inicioPremium.php?pagina=hiphopPremium'>
					 HIP HOP</a></li>";
					 
		echo "<li><a href='inicioPremium.php?pagina=twerkPremium'>
					 TWERK</a></li>";
	    echo "<li><a href='inicioPremium.php?pagina=dancehallPremium'>
					DANCEHALL</a></li>";
	    echo "<li><a href='inicioPremium.php?pagina=poppingPremium'>
					POPPING</a></li>";
		echo "<li><a href='inicioPremium.php?pagina=waackingPremium'>
					WAACKING & VOGUE</a></li>";
		echo "<li><a href='inicioPremium.php?pagina=housePremium'>
					HOUSE & SHUFFLE</a></li></ul>";
					 
					 
					 ?>
		
							
	</nav>
</header>
<?php
if(isset($_GET['pagina'])){
	if(strcmp($_GET['pagina'], 'hiphopPremium')==0){
		include_once 'Paginas/hiphopPremium.php';
	}
	if(strcmp($_GET['pagina'], 'twerkPremium')==0){
		include_once 'Paginas/twerkPremium.php';
	}
	if(strcmp($_GET['pagina'], 'dancehallPremium')==0){
		include_once 'Paginas/dancehallPremium.php';
	}
	if(strcmp($_GET['pagina'], 'poppingPremium')==0){
		include_once 'Paginas/poppingPremium.php';
	}
	if(strcmp($_GET['pagina'], 'waackingPremium')==0){
		include_once 'Paginas/waackingPremium.php';
	}
	if(strcmp($_GET['pagina'], 'housePremium')==0){
		include_once 'Paginas/housePremium.php';
	}
}
?>
</body>
</html>