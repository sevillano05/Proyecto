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
    <link rel="stylesheet" href="TablaPosicion.css">
</head>
<body>
 <div class="fondo">
   
    <img class="imagenfondo"src="asset\imagen-de-uno-de-los-estadios-del-mundial-de-qatar-2022.-getty-655x368.jpg" alt="">
    <?php include("Templates/nav_bar.php"); ?>

 <table class="TablaPosiciones">

    <tr>
      <th>Nombre</th>
      <th>JuegosJugados</th>
      <th>JuegosGanados</th>
      <th>JuegosEmpatados</th>
      <th>JuegosPerdidos</th>
      <th>Goles</th>
      <th>GolesEnemigo</th>
      <th>DiferenciaGoles</th>
    </tr>
       <?php   
              $queryEquipos = "SELECT * FROM tablaposicion";
              $Posicion= $conexion_bd->query($queryEquipos);
              $Posicion = $Posicion->fetch_all(MYSQLI_ASSOC);
        foreach ($Posicion as $Posiciones) { 

      echo '<tr>';
      echo '<td>' . $Posiciones['nombre'] . '</td>';
      echo '<td>' . $Posiciones['JuegoJugado'] . '</td>';
      echo '<td>' . $Posiciones['JuegoGanado'] . '</td>';
      echo '<td>' . $Posiciones['JuegoEmpatado'] . '</td>';
      echo '<td>' . $Posiciones['JuegoPerdido'] . '</td>';
      echo '<td>' . $Posiciones['Golesa'] . '</td>';
      echo '<td>' . $Posiciones['GolEnemigo'] . '</td>';
      echo '<td>' . $Posiciones['DiferenciaGol'] . '</td>';
      echo '</tr>';
    };
    ?>

  </table>     
</body>