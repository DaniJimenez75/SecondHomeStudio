
<!DOCTYPE html>
<html lang="es">
<head>  

  <img class = "imagensecond" src="../Imagenes/logoo.png ">
  <h1 id="TITULOPAGINA">SECOND HOME STUDIO</h1>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximun-scale=1.0, minimun-scale=1.0"> 
  <link rel="stylesheet" type="text/css" href="../CSS/EstructuraPrincipal.css">
  <link rel="stylesheet" type="text/css" href="../CSS/Fuentes.css">
  <link rel="stylesheet" type="text/css" href="../CSS/index.css">
  <link rel="stylesheet" type="text/css" href="../CSS/PreciosHorarios.css">
  <link rel="stylesheet" type="text/css" href="../CSS/Staff.css">
  <link rel="stylesheet" type="text/css" href="../CSS/registro.css">

  <link rel="stylesheet" type="text/css" href="../CSS/normalize.css">

  <link rel="shortcut icon" href="Imagenes/secondhome.ico" />
  <title>SECOND HOME STUDIO</title>

</head>

<body>
<div class = "contenedorRegistro">
<h1 id = "tituloRegistro">LOGIN</h1>
<div class = "formulario">
  <form name="login" method="post" action="processaLogin.php">
  <span>USERNAME:          </span><input type="text" name="username">
  <br>
  <br>
  <span>Contraseña            </span><input type="password" name="password">
  <br>
  <br>
  <input type="submit" value="Login" name="boton" id="boton">

  </form>
  </div>
</div>
</body>
<?php
 if(isset($_GET["error"])) {
    $error=$_GET["error"]; 
    switch($error) {
      case 1:
           echo "Usuari o Password incorrectes";
      break;
      
      default:
        echo "Error en validar usuari";
      }
         
   }

?> 

        </html>
