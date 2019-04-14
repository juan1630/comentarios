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
    }

?>