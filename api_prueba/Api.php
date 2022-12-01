<?php
class Api{
 
    // database connection and table name
    private $conn;


    // constructor del objeto
    public function __construct($db){
        $this->conn = $db;
    }


    // consultar de tabla partido
    public function read(){
        $stmt = $this->conn->prepare("SELECT * FROM partido");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result;
    }
}
?>