<body>
    <?php include("nav_bar.php") ?>
    
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
