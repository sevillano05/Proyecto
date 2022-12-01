    <?php include('Templates/header.php') ?>
    <div class="cuerpo flex">
        <?php //Querys mostrar Grupos
        $queryGrupos = "SELECT * FROM equipos order by Puntos";
        $Grupos = $conn->query($queryGrupos);
        $Grupos ->fetch_all(MYSQLI_ASSOC);

        
        ?>
        
        <section class="Grupos flex">      
            <section class="Grupo flex">
                <h3>Grupo A</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'A') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo B</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'B') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo C</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'C') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section>
            <section class="Grupo flex">
                <h3>Grupo D</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'D') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section> 
            <section class="Grupo flex">
                <h3>Grupo E</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'E') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>

                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section> 
            <section class="Grupo flex">
                <h3>Grupo F</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'F') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section> 
            <section class="Grupo flex">
                <h3>Grupo G</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'G') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section> 
            <section class="Grupo flex">
                <h3>Grupo H</h3>
                <?php foreach ($Grupos as $Equipo) { 
                    if ($Equipo['Grupos'] == 'H') {?><!-- Mostrar Grupos -->
                        <?php echo '<a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'"  target="" >
                            <section class="equipo flex">
                                <img src="' . $Equipo['UrlBandera'] . '">
                                <a href="http://localhost/Proyecto/index.php?page=Jugadores&idEquipo='.$Equipo['Id'].'" target="" class="titulo">
                                <p class="titulo">' . $Equipo['Pais'] . '</p>
                                </a>';
                                if ($Equipo['Id'] == $_SESSION["favorito"]){
                                    echo '<section class="seña">☼</section>';
                                }
                            echo '</section>
                        </a>';
                    }
                } ?>
            </section> 
        </section>
    </div>
</body>
</html>

