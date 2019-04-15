<?php

    class Consultas{
        #public function getUsers(){
         #   
        #}

        #creamos la fucnio 
        public function writeUsers($argName, $argPass, $argDes, $argComen){
            $modelo = new Conexion('root','');
            #hacemos la conexion
            $conexion =$modelo->getConnection();
            #traemos del mdelo la funcion getConecction

            $sql="insert into usuario (username, password, descrption, comentario) values (:nombre, :password, :descrption, :comentario)";
            #creamos la consulta 
            $stamente=$conexion->prepare($sql);
            $stamente->bindParam(':nombre',$argName);
            $stamente->bindParam(':password',$argPass);
            $stamente->bindParam(':descrption',$argDes);
            $stamente->bindParam(':comentario',$argComen);

            if(!$stamente){
                return "Algo ocurrio ";
            }else{
                $stamente->execute();
                return "Registro creado";
            }
        }

        public function agregarProducto($nombre, $categoria, $precio, $desc){
            $modelo = new Conexion('root', '');
            $conexion=$modelo->getConnection();
            $sql='insert into productos (nombre, categoria, precio, descropcion) values(:nombre, :categoria,:precio,:desc)';
            $stament=$conexion->prepare($sql);
            $stament->bindParam(':nombre', $nombre);
            $stament->bindParam(':categoria', $categoria);
            $stament->bindParam(':precio', $precio);
            $stament->bindParam(':desc', $desc);
            
            if(!$stament){
                return "Algo paso con la consulta";
            }else{
                $stament->execute();
               echo "<a href='../views/showAll.php' >Ver todos los productos</a>";
            }

        }

        public function verTodos(){
            $filas=null;

            $modelo=new Conexion('root','');
            $conexion=$modelo->getConnection();
            $sql="select * from productos";
            $stament=$conexion->prepare($sql);
            $stament->execute();
            while($result=$stament->fetch()){
                $filas[]=$result;
            }
            return $filas;
        }
    }

?>