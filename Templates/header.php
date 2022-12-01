<?php session_start();
$queryid = "SELECT * FROM equipos where Id='$idEquipo'";
$id = $conn->query($queryid);
$id ->fetch_all(MYSQLI_ASSOC);


if ($page == "Jugadores") { ?>
    <div class="header">
        <?php foreach ($id as $id) { 
            echo '<button>
                <a href="http://localhost/Proyecto/CambioFav.php?idEquipo='.$idEquipo.'"  target="">Seleccionar Favorito</a>
            </button><br>' ?>
            <?php echo '<img src="'.$id['UrlBandera'].'" alt="">' ?>
            <?php echo '<h1 class="titulo">'.$id['Pais'].'</h1>' ?>
            <section class="flex">
                <?php echo '<h4 class="titulo">Participacion en mundiales: '.$id['Mundiales'].'</h4>' ?>
                <?php echo '<h4 class="titulo">Mundiales Ganados: '.$id['MundialesG'].'</h4>' ?>
                <?php echo '<h4 class="titulo">Ultimo Mundial: '.$id['Ultimo_mundial'].'</h4>' ?>
                <?php echo '<h4 class="titulo">Jugador Estrella: '.$id['MVP'].'</h4>' ?>
            </section>
            
            <hr>
        <?php } ?>
    </div>
<?php } else { ?>
    <div class="header">
        <img src="img/WhiteCopa.png" alt="">
        <h1 class="titulo">Mundial de fútbol Qatar 2022</h1>
    </div>
<?php } ?>
