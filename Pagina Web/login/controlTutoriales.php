<?php
class Usuaris {
    private $bd;
    private $usuaris="root";
    private $password="";

    function __construct() {
     
        include_once 'conexion.php';


    }


        if(isset($_GET['control'])){
            $operacio = 'hiphopNormal';
            if(strcmp($_GET['operacio'], $operacio)==0){
                include_once 'Normal/Paginas/HipHopNormal.php';
            }
        }
    
}