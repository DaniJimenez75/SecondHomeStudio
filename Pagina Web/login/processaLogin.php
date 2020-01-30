<?php
if(isset($_POST['username']) && isset($_POST['password'])) {
$username=$_POST['username'];
$password = md5($_POST['password']);

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "secondhome";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname); 

$result = mysqli_query($conn, "SELECT * FROM usuarios WHERE username = '$username'");
			
      $row = mysqli_fetch_assoc($result);


			

			if ($password == $row['password']) {

       session_start();
        $_SESSION['username'] = $username;  
        if($row['premium']){
          header('Location: Premium/inicioPremium.php');
        }else{
          header('Location: Normal/inicioNormal.php');
        }  
        
        if($row['username'] == 'Administrador'){
          header('Location: Administrador/admin.php');

        }
        
      } else {   // Username/Password incorrectes
        header('Location: login.php?error=1');
     }
    
 } else {     // 'Dades no enviades
     header('Location: login.php?error=2');
 }
  

		
?>
