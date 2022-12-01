    <?php include('header.php') ?>
    <div class="cuerpo flex">
        <?php //Querys mostrar Jugadores
        $queryJugadores = "SELECT * FROM jugadores WHERE Equipo='$idEquipo' order by Nombre";
        $Jugadores = $conn -> query($queryJugadores);
        $Jugadores -> fetch_all(MYSQLI_ASSOC);

        $queryTecnicos = "SELECT * FROM tecnicos WHERE Equipo='$idEquipo' order by Nombre";
        $tecnicos = $conn -> query($queryTecnicos);
        $tecnicos -> fetch_all(MYSQLI_ASSOC); ?>

        <div class="cuerpo flex">
            <?php foreach ($tecnicos as $tecnico) { ?><!-- Mostrar Tecnico -->
                <section class="marco">
                    <?php echo '<img src="' . $tecnico['Foto'] . '" alt="">' ?>
                    <?php echo '<h3 class="titulo">' . $tecnico['Nombre'] . ' ' . $tecnico['Apellido'] .'</h3>' ?>
                    <?php echo '<h3 class="titulo">Tecnico</h3>' ?>
                </section>
            <?php } ?>
            
        </div>  
        <?php echo '<hr>'; ?>
        <div class="cuerpo flex">
            <?php foreach ($Jugadores as $jugador) { ?><!-- Mostrar jugadores -->
                <section class="marco">
                    <?php echo '<img src="' . $jugador['Foto'] . '" alt="">' ?>
                    <?php echo '<h3 class="titulo">' . $jugador['Nombre'] . ' ' . $jugador['Apellido'] .'</h3>' ?>
                    <div>
                        <?php echo '<p class="titulo">Número: ' . $jugador['Numero'] .'</p>' ?>
                        <?php echo '<p class="titulo">Posición: ' . $jugador['Posicion'] .'</p>' ?>
                        <?php echo '<p class="titulo">Goles Anotados: ' . $jugador['GolesAnotados'] .'</p>' ?>
                        <?php echo '<p class="titulo">Tarjetas Rojas: ' . $jugador['TarRoja'] .'</p>' ?>
                        <?php echo '<p class="titulo">Tarjetas Amarillas: ' . $jugador['TarAmarilla'] .'</p>' ?>
                        <?php echo '<p class="titulo">Edad: ' . 2022-$jugador['FechaNacimiento'] .'</p>' ?>
                    </div>
                </section>
            <?php } ?>
        </div>
    </div>
</body>
</html>
