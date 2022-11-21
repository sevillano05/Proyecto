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
    <title>Fase de Grupos</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Grupos.css">
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
        <?php //Querys mostrar Grupos
        $queryGrupoA = "SELECT * FROM equipos WHERE Grupos='A' order by Puntos";
        $queryGrupoB = "SELECT * FROM equipos WHERE Grupos='B' order by Puntos";
        $queryGrupoC = "SELECT * FROM equipos WHERE Grupos='C' order by Puntos";
        $queryGrupoD = "SELECT * FROM equipos WHERE Grupos='D' order by Puntos";
        $GrupoA = $conn->query($queryGrupoA);
        $GrupoB = $conn->query($queryGrupoB);
        $GrupoC = $conn->query($queryGrupoC);
        $GrupoD = $conn->query($queryGrupoD);
        $GrupoA ->fetch_all(MYSQLI_ASSOC);
        $GrupoB ->fetch_all(MYSQLI_ASSOC);
        $GrupoC ->fetch_all(MYSQLI_ASSOC);
        $GrupoD ->fetch_all(MYSQLI_ASSOC);       
        ?>
        <section class="Grupos flex">      
            <section class="Grupo flex">
                <h3>Grupo A</h3>
                <?php foreach ($GrupoA as $Equipo) { ?><!-- Mostrar Grupos -->
                    <a href="Jugadores.php" target="_blank">
                        <section class="equipo flex">
                        <?php echo '<img src="' . $Equipo['UrlBandera'] . '" alt="">' ?>
                        <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                                    <p class="titulo">' . $Equipo['Nombre'] . '</p>
                                    </a>' ?>
                        </section>
                    </a>
                    <?php } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo B</h3>
                <?php foreach ($GrupoB as $Equipo) { ?><!-- Mostrar Grupos -->
                    <a href="Jugadores.php" target="_blank">
                        <section class="equipo flex">
                        <?php echo '<img src="' . $Equipo['UrlBandera'] . '" alt="">' ?>
                        <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                                    <p class="titulo">' . $Equipo['Nombre'] . '</p>
                                    </a>' ?>
                        </section>
                    </a>
                    <?php } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo C</h3>
                <?php foreach ($GrupoC as $Equipo) { ?><!-- Mostrar Grupos -->
                    <a href="Jugadores.php" target="_blank">
                        <section class="equipo flex">
                        <?php echo '<img src="' . $Equipo['UrlBandera'] . '" alt="">' ?>
                        <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                                    <p class="titulo">' . $Equipo['Nombre'] . '</p>
                                    </a>' ?>
                        </section>
                    </a>
                    <?php } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo D</h3>
                <?php foreach ($GrupoD as $Equipo) { ?><!-- Mostrar Grupos -->
                    <a href="Jugadores.php" target="_blank">
                        <section class="equipo flex">
                        <?php echo '<img src="' . $Equipo['UrlBandera'] . '" alt="">' ?>
                        <?php echo '<a href="Jugadores.php" target="_blank" class="titulo">
                                    <p class="titulo">' . $Equipo['Nombre'] . '</p>
                                    </a>' ?>
                        </section>
                    </a>
                    <?php } ?>
            </section> 
        </section>
        
    </div>
</body>
</html>

<?php
$conn->close();
?> 