<?php
$servidor='localhost';
$Usuario='root';
$Contraseña='';
$Base_de_datos='proyecto';

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
    <div class="menucontainer">
        <a href="proyecto.php"><img class="logo"src="asset\Copa.jpg" alt=""></a>
          <ul class="menu">
                <li><a href="">Inicio</a></li>
                <li><a href="">Equipos</a></li>
                <li ><a href="">Resultado</a></li>
                <li><a href="">Tabla de Clasificación</a></li>
                <li><a href="" style="background-color: rgba(67, 64, 64, 0.534); border-radius: 10px;">Tabla de Posición</a></li>
                <li><a href="">Equipo Favoritos</a></li>
              </ul>
            <ul class="menu">
                <li><a href="login.php">Iniciar Sesion</a></li>
                <li><a href="">Registrar</a></li>
               
        </ul>
    
 </div> 
 <?php 
        $queryEquipos = "SELECT  * FROM TablaPosicion";
        $Posicion= $conn->query($queryEquipos);
        $Posicion ->fetch_all(MYSQLI_ASSOC);
?>
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
    foreach ($Posicion as $Posiciones) { 
      ?>

       <?php    
      echo '<tr>';
      echo '<td>' . $Posiciones['Nombre'] . '</td>';
      echo '<td>' . $Posiciones['JuegosJugados'] . '</td>';
      echo '<td>' . $Posiciones['JuegosGanados'] . '</td>';
      echo '<td>' . $Posiciones['JuegosEmpatados'] . '</td>';
      echo '<td>' . $Posiciones['JuegosPerdidos'] . '</td>';
      echo '<td>' . $Posiciones['Goles'] . '</td>';
      echo '<td>' . $Posiciones['GolesEnemigo'] . '</td>';
      echo '<td>' . $Posiciones['DiferenciaGoles'] . '</td>';
      echo '</tr>';
    };
    ?>

  </table>     
</body>