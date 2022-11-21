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
        ?>
        <section class="flex">
            <?php foreach ($Jugadores as $jugador) { ?><!-- Mostrar jugadores -->
                <section class="">
                    <div>
                        <?php echo '<img src="' . $Jugadore['UrlBandera'] . '" alt="">' ?>
                    </div>
                    <div>
                        <a href="Jugadores.php" target="_blank">
                            <section class="equipo flex">
                            
                            <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                                        <p class="titulo">' . $Equipo['Nombre'] . '</p>
                                        </a>' ?>
                            </section>
                        </a>
                    </div>
                </section>
            <?php } ?>
        </section>
    </div>
</body>
</html>

<?php
$conn->close();
?> 