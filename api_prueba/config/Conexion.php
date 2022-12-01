<?php
class Conexion{

    private $host  = "localhost";
    private $user  = "root";
    private $password   = "";
    private $database  = "prueba"; 

    public function getConnection(){	
        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        
        if($conn->connect_error){
            die("Error - Conexion a MySQL fallido: ".$conn->connect_error);
        }
        else {
            return $conn;
        }
    }
}
?>