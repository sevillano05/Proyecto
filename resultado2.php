<?php

$servidor='localhost';
$Usuario='root';
$Contraseña='';
$Base_de_datos='prueba';

 $conexion_bd = @new mysqli($servidor,$Usuario,$Contraseña,$Base_de_datos);
if($conexion_bd->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto</title>
    <link rel="stylesheet" href="resultado.css">
</head>
<body>
 <div class="fondo">
   
    <img class="imagenfondo"src="asset\imagen-de-uno-de-los-estadios-del-mundial-de-qatar-2022.-getty-655x368.jpg" alt="">
    <?php include("Templates/nav_bar.php"); ?>
 <h3 style="color: white; text-align:center" >Progreso</h3>
    <div class="contcarta">
      
     <?php 
      $sql="SELECT * FROM partido where estado = 'Progreso'";
      $resultado=$conexion_bd->query($sql);
      if($resultado -> num_rows > 0){
          while($row = $resultado->fetch_assoc()){
              echo ("<div class='carta'>
              <h3 style='text-align:center;'>$row[Equipo1] vs $row[Equipo2]</h3>
              <p>$row[fecha]</p>
              <p>$row[estado]</p>
              <form action='profile.php' method='POST'>
              <input type='hidden' name='id' value='$row[id]'>
              <input type='submit' value='Ver mas informacion'>
              </form>
            </div>");
          }
      }
     ?>


    </div>
    <h3 style="color: white; text-align:center" >Progreso</h3>
    <div class="contcarta">
      
     <?php 
      $sql="SELECT * FROM partido where estado = 'Terminado'";
      $resultado=$conexion_bd->query($sql);
      if($resultado -> num_rows > 0){
          while($row = $resultado->fetch_assoc()){
              echo ("
              <div class='carta'>
              <h3 style='text-align:center;'>$row[Equipo1] vs $row[Equipo2]</h3>
              <p>$row[fecha]</p>
              <p>$row[estado]</p>
              <form action='profile.php' method='POST'>
              <input type='hidden' name='id' value='$row[id]'>
              <input type='submit' value='Ver mas informacion'>
              </form>
            </div>");
          }
      }
     ?>


    </div>
  
</body>
</html>