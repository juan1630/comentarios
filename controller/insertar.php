<?php

require_once('../model/conexion.php');
require_once('../model/consultas.php');

$user = $_POST['user'];
$pass=$_POST['password'];
$descrip=$_POST['des'];
$comnet=$_POST['comen'];
$mensaje="";

if(count($user) > 0 && count($pass) > 0 && count($descrip) > 0 && count($comnet) > 0 ){
    
    
    $consultas = new Consultas();
    $mensaje = $consultas->writeUsers($user, $pass, $descrip, $comnet);

   
}else{
    return "Ingresa los datos completos por favor";
}


echo $mensaje;


?>