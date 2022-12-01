<?php session_start(); 
if ($_SESSION) { ?>
    <div class="menucontainer">
        <a href="http://localhost/Proyecto/index.php">
            <img class="logo"src="https://logodownload.org/wp-content/uploads/2018/07/world-cup-2022-logo.png" alt="">
        </a>
        <ul class="menu">
            <li><a class="background" href="http://localhost/Proyecto/index.php">Inicio</a></li>
            <li><a class="background" href="http://localhost/Proyecto/index.php?page=Grupos">Equipos</a></li>
            <li><a class="background" href="http://localhost/Proyecto/index.php?page=Favorito">Equipo Favoritos</a></li>
            <li><a class="background" href="">Resultados</a></li>
            <li><a class="background" href="http://localhost/Proyecto/index.php?page=Clasificacion">Tabla de Clasificación</a></li>
            <li><a class="background" href="TablaPosicion.php">Tabla de Posición</a></li>
        </ul>
        
        <ul class="menu">
        <?php echo '<li><a class="background">' . strtoupper($_SESSION["usuario"]) . '</a></li>'; ?>
            <li><a class="background" href="CerrarSesion.php">Cerrar Sesion</a></li>
        </ul>
    </div>
<?php } else { ?>
    <div class="menucontainer">
        <a href="http://localhost/Proyecto/index.php">
            <img class="logo"src="https://logodownload.org/wp-content/uploads/2018/07/world-cup-2022-logo.png" alt="">
        </a>
        <ul class="menu">
            <li><a class="background" href="http://localhost/Proyecto/index.php">Inicio</a></li>
            <li><a class="background" href="http://localhost/Proyecto/index.php?page=Grupos">Equipos</a></li>
            <li><a class="background" href="">Equipo Favoritos</a></li>
            <li><a class="background" href="">Resultados</a></li>
            <li><a class="background" href="">Tabla de Clasificación</a></li>
            <li><a class="background" href="TablaPosicion.php">Tabla de Posición</a></li>
        </ul>
        
        <ul class="menu">
            <li><a class="background" href="login.php">Iniciar Sesion</a></li>
            <li><a class="background" href="registro.php">Registrar</a></li>
        </ul>
    </div>

<?php } ?>