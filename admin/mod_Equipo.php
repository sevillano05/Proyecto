<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli($servername, $username, $password, $dbname);

$queryGrupos = "SELECT * FROM equipos";
$Grupos = $conn->query($queryGrupos);
$Grupos ->fetch_all(MYSQLI_ASSOC); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Info</title>
</head>
<body>
<form action="mod_equipos.php" method="POST"> 
                    <label for="">Equipos</label>
                <table class="blueTable">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>pais</th>
                                <th>bandera</th>
                                <th>cantidad mundiales</th>
                                <th>mundiales ganados</th>
                                <th>ultimo mundial</th>
                                <th>mvp</th>
                                <th>grupo</th>
                                <th>puntos</th>
                                </tr>
                                </thead>
                            <tbody>
                    <?php foreach ($Grupos as $Equipo) { ?><!-- Mostrar Grupos -->
                                
                                <tr>;
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Id'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Pais'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['UrlBandera'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Mundiales'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['MundialesG'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Ultimo_mundial'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['MVP'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Grupos'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Equipo['Puntos'].'"> </td>' ?>
                                
                                </tr>
                           <?php } ?>
                                </tbody>
                                </table>
                            </section>
                        <input type="submit" value="cambiar valores en la tabla Equipos">
                </form><br><br>
</body>
</html>
