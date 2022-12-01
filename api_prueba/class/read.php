<?php

// headers requeridos
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

// Incluir objetos
include_once "../config/Conexion.php";
include_once '../Api.php';

// Instaciar DB y objetos
$database = new Conexion();
$db = $database->getConnection();

// inicializar objeto
$people = new Api($db);
$stmt = $people->read();

    // Verifico que haya más de un registro
    if($stmt->num_rows > 0){
        // array de people
        $people_arr=array();
        $people_arr["records"]=array();


        
        while ($row = $stmt->fetch_assoc()){
            // Extraer columna
            // Esto hará quela propiedad $row['nombre_columna'] se
            // simplifique a solo $nombre_columna
            extract($row);


            $people_item=array(
                "Equipo1" => $equipo1,
                "Equipo2" => $equipo2,
                "lugar" => $lugar,
                "hora" => $hora,
                "estado" => $estado,
                "fecha" => $fecha
            );


            array_push($people_arr["records"], $people_item);
        }


        // Código de respuesta - 200 OK
        http_response_code(200);


        // Mostrar lista de people en formato JSON
        echo json_encode($people_arr);
    }
    else{


        // Código de error - 404 not found
        http_response_code(404);


        // Mensaje al usuario
        echo json_encode(
            array("message" => "No se encontró Registro.")
        );
    }     


?>