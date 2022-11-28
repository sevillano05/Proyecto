    <link rel="stylesheet" href="css/Grupos.css">
</head>
<body>
    <?php include("nav_bar.php") ?>    
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

