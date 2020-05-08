<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
$username=$_POST['username'];
$password = md5($_POST['password']);

/* CONEXIÓN A LA BASE DE DATOS */
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "secondhome";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE username = '$username'");
			
      $row = mysqli_fetch_assoc($result);


      /* SI EL PASSWORD ES IGUAL QUE EL PASSWORD QUE HAY GUARDADO
      EN LA BASE DE DATOS INICIARÁ SESIÓN */
			if ($password == $row['password']) {

       session_start();

        $_SESSION['username'] = $username;  
        /* COMPROBAMOS LA COLUMNA PREMIUM */
        if($row['premium']){
          header('Location: Premium/inicioPremium.php');
        }else{
          header('Location: Normal/inicioNormal.php');
        }  
        
        /* SI EL USUARIO ES EL USUARIO "Administrador" ENTRARA EN LA
        PAGINA DE ADMINISTRADOR */
        if($row['username'] == 'Administrador'){
          header('Location: Administrador/admin.php');

        }
        
        /*SINO PASA POR GET EL ERROR */
      } else {   // Username/Password incorrectes
        header('Location: login.php?error=1');
     }
    
 } else {     // 'Dades no enviades
     header('Location: login.php?error=2');
 }
  

		
?>
