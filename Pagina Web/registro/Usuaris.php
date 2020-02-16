<?php
class Usuaris {
    protected $bd;
    protected $usuari="root";
    protected $password="";


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
   public function getAll() {
	$sql="select * from usuarios";  
        $ordre = $this->bd->prepare($sql);	 
        $ordre->execute();   
        $res = $ordre->fetchAll(PDO::FETCH_ASSOC);
	
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

    public function cambiarPremium($premium,$username) {
		$sql ="update usuarios set premium=:premium where username=:username";
		$ordre = $this->bd->prepare($sql);	 
		
        $ordre->bindValue(':username',$username);
        $ordre->bindValue(':premium',$premium);

		
		$res = $ordre->execute(); 
        return $res;

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

   public function setUsername($username,$usernameAntiguo){
    $sql ="update usuarios set username=:username where username=:usernameAntiguo";
    $ordre = $this->bd->prepare($sql);	    
    $ordre->bindValue(':username',$username);  
    $ordre->bindValue(':usernameAntiguo',$usernameAntiguo);
    $res = $ordre->execute(); 
    return $res;
   }

   public function actualizarUsername($usuaris){
       $username = $_POST['username'];
       $usernameAntiguo = $_SESSION['username'];
       $usuaris->setUsername($username,$usernameAntiguo);

   }

   public function setTelefono($telefono,$username){
    $sql ="update usuarios set telefono=:telefono where username=:username";
    $ordre = $this->bd->prepare($sql);	    
    $ordre->bindValue(':username',$username);   
    $ordre->bindValue(':telefono',$telefono);       
    $res = $ordre->execute(); 
    return $res;
   }

   public function actualizarTelefono($usuaris){
       $username = $_SESSION['username'];
       $telefono = $_POST['telefono'];
       $usuaris->setTelefono($telefono,$username);

   }

   public function setCorreo($correo,$username){
    $sql ="update usuarios set correo=:correo where username=:username";
    $ordre = $this->bd->prepare($sql);	    
    $ordre->bindValue(':username',$username);   
    $ordre->bindValue(':correo',$correo);       
    $res = $ordre->execute(); 
    return $res;
   }

   public function actualizarCorreo($usuaris){
       $username = $_SESSION['username'];
       $correo = $_POST['correo'];
       $usuaris->setCorreo($correo,$username);

   }

   public function setContraseña($password,$username){
    $sql ="update usuarios set password=:password where username=:username";
    $ordre = $this->bd->prepare($sql);	    
    $ordre->bindValue(':username',$username);   
    $ordre->bindValue(':password',md5($password));       
    $res = $ordre->execute(); 
    return $res;
   }

   public function actualizarContraseña($usuaris){
       $username = $_SESSION['username'];
       $password = $_POST['password'];
       $usuaris->setContraseña($password,$username);

   }

  
}

?>
