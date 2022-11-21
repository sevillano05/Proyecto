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
    <title>Equipos clasificados</title>
    <link rel="stylesheet" href="css/style.css">
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
        <img class="background" src="img/WhiteCopa.png" alt="">
        <h1 class="titulo">Mundial de fútbol Qatar 2022</h1>
    </div>
    <div class="cuerpo flex">
        <?php //Mostrar Equipos
        $queryEquipos = "SELECT  * FROM equipos";
        $Equipos = $conn->query($queryEquipos);
        $Equipos ->fetch_all(MYSQLI_ASSOC);

         foreach ($Equipos as $Equipo) { ?>
            <a href="Jugadores.php" target="_blank">
                <section class="equipo background">
                <?php echo '<img src="' . $Equipo['UrlBandera'] . '" alt="">' ?>
                <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                            <h4 class="titulo">' . $Equipo['Nombre'] . '</h4>
                            </a>' ?>
                </section>
            </a>
        <?php } ?>
    </div>
</body>
</html>

<?php
$conn->close();
?> 