<?php

require_once('../model/conexion.php');
require_once('../model/consultas.php');

$user = $_POST['user'];
$pass=$_POST['password'];
$descrip=$_POST['des'];
$comnet=$_POST['comen'];
$mensaje="";

if(strlen($user) > 0 && strlen($pass) > 0 && strlen($descrip) > 0 && strlen($comnet) > 0 ){
    
    
    $consultas = new Consultas();
    $mensaje = $consultas->writeUsers($user, $pass, $descrip, $comnet);

   
}else{
    return "Ingresa los datos completos por favor";
}


echo $mensaje;


?>