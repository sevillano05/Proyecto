
<?php
    session_start();
    $servidor='localhost';
    $Usuario='root';
    $Contraseña='';
    $Base_de_datos='prueba';
    $conexion_bd = @new mysqli($servidor,$Usuario,$Contraseña,$Base_de_datos);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=}, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    
</head>
<body>
<?php
     if(isset($_POST['id'])){
        $id = $_POST['id'];
        $sql = "SELECT * FROM partido WHERE id = $id";
        $resultado = $conexion_bd->query($sql);
        $row = $resultado->fetch_assoc();
        echo("
        <div class='carta'>
        <h3 style='text-align:center;'>$row[Equipo1] vs $row[Equipo2]</h3>
        <p>$row[hora]</p>
        <p>$row[lugar]</p>
        </div>");}
        ?>
</body>
</html>