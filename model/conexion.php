<?php 

class Conexion {

    public $username="";
    public $password="";


    public function  __construct( $argUsername, $argPass ){

        $this->username=$argUsername;
        $this->password=$argPass;
    }

    public function getConnection (){
       try{
        $con = new PDO('mysql:host=localhost;dbname=test1',$this->username,$this->password);
        return $con;
    }  catch (PDOException $e) {
        print "¡Error!: " . $e->getMessage() . "<br/>";
        die();
    }

    }   
}


?>