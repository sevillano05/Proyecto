    <div class="cuerpo flex">
        <?php //Querys mostrar partidos
        $queryTecnicos = "SELECT * FROM partidos WHERE Pais1= '$_SESSION[favorito]' order by Fecha";
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
                <div class="cuerpo flex">
                    <?php foreach ($tecnicos as $tecnico) { ?><!-- Mostrar Tecnico -->
                        <table>
                            <thead>
                            <tr>
                                <th>Pais 1</th>
                                <th>Goles Pais 1</th>
                                <th>Goles Pais 2</th>
                                <th>Pais 2</th>
                                <th>Fecha</th>
                                <th>Estadio</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['Pais1'].'</h4>' ?></td>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['GolesP1'].'</h4>' ?></td>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['GolesP2'].'</h4>' ?></td>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['Pais2'].'</h4>' ?></td>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['Fecha'].'</h4>' ?></td>
                                <td><?php echo '<h4 class="titulo">'.$tecnico['Estadio'].'</h4>' ?></td>
                            </tr>
                            </tbody>
                        </table>
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