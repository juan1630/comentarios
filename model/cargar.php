<?php 


function cargar(){
    $fila="";
$consultas = new Consultas();
$filas = $consultas->verTodos();

foreach ($filas as $fila){
    echo "<div class='card' style='width: 18rem;'>";
    echo "<div class='card-body'>";
    echo "<h3 class='card-title'>".$fila['nombre']."</h3>";
    echo "<h4 class='card-title'>Categoria: ".$fila['categoria']."</h4>";
    echo "<p class=''card-text>Precio: $".$fila['precio']."</p>";
    echo " <p class='card-text'>Descripción: ".$fila['descropcion']."</p>";
    echo "<button class='btn btn-outline-primary btn-block' >Ver más"."</buttom>";
    echo "</div>";
    echo "</div>";
}

}

?>