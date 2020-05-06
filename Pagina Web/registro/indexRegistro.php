<?php
	include_once 'Usuaris.php';
	error_reporting(0);

 	ini_set('display_errors', 1);

		$missatgeUsername ="";
		$missatgeTelefono ="";
		$missatgeCorreo ="";

  
        $usuaris = new Usuaris();
       
	if($_SERVER['REQUEST_METHOD']=='POST') {
			$username=$_POST['username'];
			$nombre=$_POST['nombre'];
			$apellidos = $_POST['apellidos'];
			$telefono=$_POST['telefono'];
			$correo=$_POST['correo'];
			$password=$_POST['password'];
			$resUsername = $usuaris->getUsername($username);
			$resTelefono = $usuaris->getTelefono($telefono);
			$resCorreo = $usuaris->getCorreo($correo);
			if(!$resUsername && !$resTelefono && !$resCorreo && !$error) {
				
				$res = $usuaris->afegir($username,$nombre,$apellidos,$telefono,$correo,$password);
				

			} 
			if($resUsername) {
				$missatgeUsername = "Este username ya existe";
			}
			if($resTelefono) {
				$missatgeTelefono = "Este telefono ya existe";
			}
			if($resCorreo) {
				$missatgeCorreo = "Este correo ya existe";
			}
			
	}

       
       



        
      
?>






