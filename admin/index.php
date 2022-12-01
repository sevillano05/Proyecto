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

$queryJugadores = "SELECT * FROM jugadores";
$Jugadores = $conn->query($queryJugadores);
$Jugadores ->fetch_all(MYSQLI_ASSOC); 

$queryPartidos = "SELECT * FROM partidos";
$Partidos = $conn->query($queryPartidos);
$Partidos ->fetch_all(MYSQLI_ASSOC); 

$querytecnicos = "SELECT * FROM tecnicos";
$tecnicos = $conn->query($querytecnicos);
$tecnicos ->fetch_all(MYSQLI_ASSOC); 
        
$queryUsuarios = "SELECT * FROM usuarios";
$Usuarios = $conn->query($queryUsuarios);
$Usuarios ->fetch_all(MYSQLI_ASSOC); 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundial Qatar 2022</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    
    <?php //Mensaje de error
    if ($conn->connect_error) {
        echo '<section class="error">
                <img src="https://cdn3.iconfinder.com/data/icons/user-interface-21/32/1026-512.png" alt="">
                <p class="error"> Error número: '.mysqli_connect_errno().
                '<br>
                mensaje de error: '.mysqli_connect_error().
             '</section>';
    
        exit();
        die("Connection failure: " . $conn->connect_error);
    } 
    ?>
    <section>
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
    </section>
    <section>
    <form action="mod_jugadores.php" method="POST"> 
                    <label for="">Jugadores</label>
                <table class="blueTable">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>apellido</th>
                                <th>foto</th>
                                <th>equipo</th>
                                <th>numero de camiseta</th>
                                <th>posicion</th>
                                <th>goles anotados</th>
                                <th>tarjetas amarillas</th>
                                <th>tarjetas rojas</th>
                                <th>Fecha de nacimiento</th>
                                </tr>
                                </thead>
                            <tbody>
                    <?php foreach ($Jugadores as $Jugador) { ?>
                        <!-- Mostrar Grupos -->
                                
                                <tr>;
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Id'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Nombre'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Apellido'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Foto'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Equipo'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Numero'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['Posicion'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['GolesAnotados'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['TarAmarilla'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['TarRoja'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Jugador['FechaNacimiento'].'"> </td>' ?>
                                
                                </tr>
                           <?php }?>
                                </tbody>
                                </table>
                            </section>
                            <input type="submit" value="cambiar valores en la tabla jugadores">
                </form><br><br>
            
       
    </section>
    <section>
    <form action="mod_tecnicos.php" method="POST"> 
                    <label for="">Tecnicos</label>
                <table class="blueTable">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Nombre</th>
                                <th>apellido</th>
                                <th>foto</th>
                                <th>equipo</th>
                                </tr>
                                </thead>
                            <tbody>
                    <?php foreach ($tecnicos as $tecnico) { ?>
                        <!-- Mostrar Grupos -->
                                
                                <tr>;
                                <?php echo '<td><input type="text" placeholder="'.$tecnico['Id'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$tecnico['Nombre'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$tecnico['Apellido'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$tecnico['Foto'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$tecnico['Equipo'].'"> </td>' ?>                                
                                </tr>
                           <?php }?>
                                </tbody>
                                </table>
                            </section>
                            <input type="submit" value="cambiar valores en la tabla tecnicos">
                </form>
                <br><br>
    
    </section>
    <section>
    <form action="mod_partidos.php" method="POST"> 
                    <label for="">Partidos</label>
                <table class="blueTable">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Pais 1</th>
                                <th>Goles pais 1</th>
                                <th>pais 2</th>
                                <th>goles pais 2</th>
                                <th>fecha</th>
                                <th>estadio</th>
                                <th>clasificacion</th>
                                </tr>
                                </thead>
                            <tbody>
                    <?php foreach ($Partidos as $Partido) { ?>
                        <!-- Mostrar Grupos -->
                                
                                <tr>;
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Id'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Pais1'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['GolesP1'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Pais2'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['GolesP2'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Fecha'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Estadio'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$Partido['Clasficacion'].'"> </td>' ?>                                
                                </tr>
                           <?php }?>
                                </tbody>
                                </table>
                            </section>
                            <input type="submit" value="cambiar valores en la tabla partidos">
                </form><br><br>
    </section>
    <section>
    <form action="mod_user.php" method="POST"> 
                    <label for="">usuarios</label>
                <table class="blueTable">
                            <thead>
                                <tr>
                                <th>Id</th>
                                <th>Admin_si</th>
                                <th>username</th>
                                <th>email</th>
                                <th>contraseña</th>
                                <th>equipo favorito</th>
                                </tr>
                                </thead>
                            <tbody>
                    <?php foreach ($Usuarios as $user) { ?>
                        <!-- Mostrar Grupos -->
                                
                                <tr>;
                                <?php echo '<td><input type="text" placeholder="'.$user['Id'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$user['Admin_si'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$user['Username'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$user['Email'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$user['Contraseña'].'"> </td>' ?>
                                <?php echo '<td><input type="text" placeholder="'.$user['EFavorito'].'"> </td>' ?>                                
                                </tr>
                           <?php }?>
                                </tbody>
                                </table>
                            </section>
                            <input type="submit" value="cambiar valores en la tabla usuarios">
                </form>
    </section>