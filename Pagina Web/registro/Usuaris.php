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





}

?>
