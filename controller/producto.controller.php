<?php

require_once('../model/conexion.php');
require_once('../model/consultas.php');


$nombre=$_POST['nombre'];
$categoria=$_POST['categoria'];
$precio=$_POST['precio'];
$desc=$_POST['desc'];


if(strlen($nombre) > 0 || strlen($categoria) > 0 || strlen($precio) > 0 || strlen($desc) > 0){
        $model= new Consultas();
        $model->agregarProducto($nombre, $categoria, $precio, $desc);
}else{
    echo "<a href='../views/showProducts.html' >Regresa algo salió mal</a>";
}

?>
