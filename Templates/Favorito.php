    <div class="cuerpo flex">
        <?php //Querys mostrar partidos
        $queryTecnicos = "SELECT p.GolesP1, p.GolesP2, e.Pais, e.UrlBandera, p.Fecha, p.Estadio
                            FROM partidos p JOIN equipos e ON p.Pais2 = e.Id 
                            WHERE Pais1 = '$_SESSION[favorito]' OR Pais2='$_SESSION[favorito]' 
                            ORDER BY Fecha;" ;
        $tecnicos = $conn -> query($queryTecnicos);
        $tecnicos -> fetch_all(MYSQLI_ASSOC); 

        $queryfavid = "SELECT * FROM equipos where Id='$_SESSION[favorito]'";
        $favid = $conn -> query($queryfavid);
        $favid ->fetch_all(MYSQLI_ASSOC);
        
        if ($_SESSION) { 
             if ($_SESSION["favorito"] != 0) { ?>
                <div class="header">
                    <?php foreach ($favid as $favid) { ?>
                        <?php echo '<img src="'.$favid['UrlBandera'].'" alt="">' ?>
                        <?php echo '<h1 class="titulo">'.$favid['Pais'].'</h1>' ?>
                        <section class="flex">
                            <?php echo '<h4 class="titulo">Participacion en mundiales: '.$favid['Mundiales'].'</h4>' ?>
                            <?php echo '<h4 class="titulo">Mundiales Ganados: '.$favid['MundialesG'].'</h4>' ?>
                            <?php echo '<h4 class="titulo">Ultimo Mundial: '.$favid['Ultimo_mundial'].'</h4>' ?>
                            <?php echo '<h4 class="titulo">Jugador Estrella: '.$favid['MVP'].'</h4>' ?>
                        </section>
                        <hr>
                    <?php } ?>
                </div>
                <div class="cuerpo">
                    <div class="ng flex">
                        <div class="titulo">Pais</div>
                        <div class="titulo">Fecha</div>
                        <div class="titulo">Pais</div>
                        <div class="titulo">Estadio</div>    
                    </div>
                    <?php foreach ($tecnicos as $tecnico) { ?><!-- Mostrar Tecnico -->
                        <div class="ng flex">
                            <div>
                                <?php echo '<h4 class="titulo">'.$favid['Pais'].'</h4>' ?>
                                <?php echo '<img src="'.$favid['UrlBandera'].'" alt="">' ?>
                            </div>
                            <div><?php echo '<h4 class="titulo">'.$tecnico['Fecha'].'</h4>' ?></div>
                            <div>
                                <?php echo '<h4 class="titulo">'.$tecnico['Pais'].'</h4>' ?>
                                <?php echo '<img src="'.$tecnico['UrlBandera'].'" alt="">' ?>
                            </div>
                            
                            <div>
                                <?php echo '<h4 class="titulo">'.$tecnico['Estadio'].'</h4>' ?>
                                
                            </div>
                        </div>
                    <?php } ?>
                </div>  
            <?php }else{
                echo '<section class="marco">
                    <h3 class="titulo">No Has seleccionado un equipo favorito</h3>
                </section>';
            }
        } else { 
            header("Location: index.php");
        } ?>
        
    </div>
</body>
</html>