    <link rel="stylesheet" href="css/Jugadores.css">
</head>
<body>
    <?php include("nav_bar.php") ?>
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
