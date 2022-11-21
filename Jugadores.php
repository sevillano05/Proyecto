<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli($servername, $username, $password, $dbname);

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jugadores</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Jugadores.css">
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
    <div class="header">
        <img src="img/WhiteCopa.png" alt="">
        <h1 class="titulo">Mundial de fútbol Qatar 2022</h1>
    </div>
    <div class="cuerpo flex">
        <?php //Querys mostrar Jugadores
        $queryJugadores = "SELECT * FROM jugadores WHERE Equipo='1' order by Nombre";
        $Jugadores = $conn -> query($queryJugadores);
        $Jugadores -> fetch_all(MYSQLI_ASSOC);      
        foreach ($Jugadores as $jugador) { ?><!-- Mostrar jugadores -->
            <section class="marco">
                <?php echo '<img src="' . $jugador['foto'] . '" alt="">' ?>
                <?php echo '<h3 class="titulo">' . $jugador['Nombre'] . ' ' . $jugador['Apellido'] .'</h3>' ?>
                <div>
                    <?php echo '<p class="titulo">Equipo: ' . $jugador['Equipo'] .'</p>' ?>
                    <?php echo '<p class="titulo">Número: ' . $jugador['Numero'] .'</p>' ?>
                    <?php echo '<p class="titulo">Posición: ' . $jugador['Posicion'] .'</p>' ?>
                    <?php echo '<p class="titulo">Goles Anotados: ' . $jugador['GolesAnotados'] .'</p>' ?>
                    <?php echo '<p class="titulo">Tarjetas Rojas: ' . $jugador['TarRoja'] .'</p>' ?>
                    <?php echo '<p class="titulo">Tarjetas Amarillas: ' . $jugador['TarAmarilla'] .'</p>' ?>
                    <?php echo '<p class="titulo">Nacionalidad: ' . $jugador['Nacionalidad'] .'</p>' ?>
                    <?php echo '<p class="titulo">Edad: ' . 2022-$jugador['FechaNacimiento'] .'</p>' ?>
                </div>
            </section>
        <?php } ?>
    </div>
</body>
</html>

<?php
$conn->close();
?> 