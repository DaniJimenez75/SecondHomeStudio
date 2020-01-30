<?php
class Usuaris {
    private $bd;
    private $usuari="root";
    private $password="";

    function __construct() {
     
	try {
	    
	    $this->bd = new PDO('mysql:host=localhost;dbname=secondhome', 
                 $this->usuari, $this->password);  	   

	} catch (PDOException $e) {
	    print "Error: " . $e->getMessage() . "<br/>";
	    die();
	}

    }

  public function getUsername($username) {
	$sql="select * from usuarios where username=:username";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':username',$username);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }
   public function getPassword($username) {
	$sql="select password from usuarios where username=:username";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':username',$username);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }
   public function getTelefono($telefono) {
	$sql="select * from usuarios where telefono=:telefono";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':telefono',$telefono);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }
   public function getCorreo($correo) {
	$sql="select * from usuarios where correo=:correo";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->bindValue(':correo',$correo);  
        $ordre->execute();   
        $res = $ordre->fetch(PDO::FETCH_ASSOC);
	
        return $res;
   }



    public function afegir($username,$nombre,$apellidos,$telefono,$correo,$password) {
 	$sql ="insert into usuarios(username,nombre,apellidos,telefono,correo,password) values 
			 (:username,:nombre,:apellidos,:telefono,:correo,:password)";
	$ordre = $this->bd->prepare($sql);	 
	$ordre->bindValue(':username',$username);
	$ordre->bindValue(':nombre',$nombre);
	$ordre->bindValue(':apellidos',$apellidos);
    $ordre->bindValue(':telefono',$telefono);
    $ordre->bindValue(':correo',$correo);
	$ordre->bindValue(':password',md5($password));
	$res = $ordre->execute(); 
        return $res;

    }

    public function actualitzar($usernameNuevo,$username,$nombre,$apellidos,$telefono,$correo,$password) {
		$sql ="update usuarios set username=:usernameNuevo,nombre=:nombre, apellidos=:apellidos, telefono=:telefono, correo=:correo, password=:password 
				 where username=:username";
		$ordre = $this->bd->prepare($sql);	 
		
        $ordre->bindValue(':username',$username);
        $ordre->bindValue(':nombre',$nombre);
        $ordre->bindValue(':apellidos',$apellidos);
        $ordre->bindValue(':telefono',$telefono);
        $ordre->bindValue(':correo',$correo);
        $ordre->bindValue(':password',md5($password));
        $ordre->bindValue(':usernameNuevo',$usernameNuevo);
		
		$res = $ordre->execute(); 
        return $res;

    }

    public function cambiarPremium($premium,$username) {
		$sql ="update usuarios set premium=:premium where username=:username";
		$ordre = $this->bd->prepare($sql);	 
		
        $ordre->bindValue(':username',$username);
        $ordre->bindValue(':premium',$premium);

		
		$res = $ordre->execute(); 
        return $res;

    }

    function update($usuaris) {  
        global $missatge;     
        $usernameNuevo=$_POST['usernameNuevo'];		
        $username=$_POST['username'];
        $nombre=$_POST['nombre'];
        $apellidos = $_POST['apellidos'];
        $telefono=$_POST['telefono'];
        $correo=$_POST['correo'];
        $password=$_POST['password'];
        $res = $usuaris->actualitzar($usernameNuevo,$username,$nombre,$apellidos,$telefono,$correo,$password);
           if($res) $missatge = "Actualització correcta";
           else $missatge = "Actualització incorrecta";		
      
        }

        
  function cambiarAPremium($usuaris) {  
	global $missatge;     	
	$username=$_POST['username'];
	$premium = 1;
	$res = $usuaris->cambiarPremium($premium,$username);
	   if($res) $missatge = "Actualització correcta";
	   else $missatge = "Actualització incorrecta";		
  
	}
	


	  function cambiarANormal($usuaris) {  
		global $missatge;     	
		$username=$_POST['username'];	
		$premium = 0;
		$res = $usuaris->cambiarPremium($premium,$username);
		   if($res) $missatge = "Actualització correcta";
		   else $missatge = "Actualització incorrecta";		
	  
        }
        

public function borrar($username) {
	$sql ="delete from usuarios where username=:username";
		$ordre = $this->bd->prepare($sql);	 
		$ordre->bindValue(':username',$username);		   
	$res = $ordre->execute();
		return $res;
   }





}

?>
