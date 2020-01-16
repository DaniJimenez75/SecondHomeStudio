<?php
try {
	$usuaris="root";
	$password="";
	$bd = new PDO('mysql:host=localhost;dbname=secondhome', $usuaris, $password);
} catch (PDOException $e) {
	print "Error: ". $e->getMessage() . "<br/>";
	die();
}

?>