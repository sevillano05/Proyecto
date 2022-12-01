<?php include('Templates/header.php') ?>
    <div class="cuerpo flex">
        <?php //Querys mostrar Grupos
        $queryPartidos = "SELECT * FROM partidos";
        $Partidos = $conn->query($queryPartidos);
        $Partidos ->fetch_all(MYSQLI_ASSOC);

        $queryGrupos = "SELECT * FROM equipos order by Id";
        $Grupos = $conn->query($queryGrupos);
        $Grupos ->fetch_all(MYSQLI_ASSOC);
        
        ?>
        
        <section class="Grupos flex">      
            <section class="Grupo ">
                <h3>Octavos de final</h3>
                <?php foreach ($Partidos as $Partido) { 
                    echo '<div>';
                        if ($Partido['Clasficacion'] == 'Octavos') { 
                            echo '<p class="titulo horafecha">' . $Partido['Fecha'] . '</p>';
                            foreach ($Grupos as $grupo) {
                                if ($grupo['Id'] == $Partido['Pais1']) {?>
                                <?php echo '
                                    <section class="equipo flex">
                                        <img src="' . $grupo['UrlBandera'] . '">
                                        <p class="titulo">' . $grupo['Pais'] . '</p>';
                                    echo '</section>';
                                }
                                if ($grupo['Id'] == $Partido['Pais2']) {?>
                                    <?php echo '
                                        <section class="equipo flex">
                                            <img src="' . $grupo['UrlBandera'] . '">
                                            <p class="titulo">' . $grupo['Pais'] . '</p>';
                                        echo '</section>';
                                    }
                            }
                        }
                    echo '</div>';
                } ?>
            </section>
            <section class="Grupo ">
                <h3>Cuartos de final</h3>
                <?php foreach ($Partidos as $Partido) { 
                    echo '<div>';
                        if ($Partido['Clasficacion'] == 'Cuartos') { 
                            echo '<p class="titulo horafecha">' . $Partido['Fecha'] . '</p>';
                            foreach ($Grupos as $grupo) {
                                if ($grupo['Id'] == $Partido['Pais1']) {?>
                                <?php echo '
                                    <section class="equipo flex">
                                        <img src="' . $grupo['UrlBandera'] . '">
                                        <p class="titulo">' . $grupo['Pais'] . '</p>';
                                    echo '</section>';
                                }
                                if ($grupo['Id'] == $Partido['Pais2']) {?>
                                    <?php echo '
                                        <section class="equipo flex">
                                            <img src="' . $grupo['UrlBandera'] . '">
                                            <p class="titulo">' . $grupo['Pais'] . '</p>';
                                        echo '</section>';
                                    }
                            }
                        }
                    echo '</div>';
                } ?>
            </section>
            <section class="Grupo ">
                <h3>Semi-finales</h3>
                <?php foreach ($Partidos as $Partido) { 
                    echo '<div>';
                        if ($Partido['Clasficacion'] == 'Semis') { 
                            echo '<p class="titulo horafecha">' . $Partido['Fecha'] . '</p>';
                            foreach ($Grupos as $grupo) {
                                if ($grupo['Id'] == $Partido['Pais1']) {?>
                                <?php echo '
                                    <section class="equipo flex">
                                        <img src="' . $grupo['UrlBandera'] . '">
                                        <p class="titulo">' . $grupo['Pais'] . '</p>';
                                    echo '</section>';
                                }
                                if ($grupo['Id'] == $Partido['Pais2']) {?>
                                    <?php echo '
                                        <section class="equipo flex">
                                            <img src="' . $grupo['UrlBandera'] . '">
                                            <p class="titulo">' . $grupo['Pais'] . '</p>';
                                        echo '</section>';
                                    }
                            }
                        }
                    echo '</div>';
                } ?>
            </section>
            <section class="Grupo ">
                <h3>Finales</h3>
                <?php foreach ($Partidos as $Partido) { 
                    echo '<div>';
                        if ($Partido['Clasficacion'] == 'Final') { 
                            echo '<p class="titulo horafecha">' . $Partido['Fecha'] . '</p>';
                            foreach ($Grupos as $grupo) {
                                if ($grupo['Id'] == $Partido['Pais1']) {?>
                                <?php echo '
                                    <section class="equipo flex">
                                        <img src="' . $grupo['UrlBandera'] . '">
                                        <p class="titulo">' . $grupo['Pais'] . '</p>';
                                    echo '</section>';
                                }
                                if ($grupo['Id'] == $Partido['Pais2']) {?>
                                    <?php echo '
                                        <section class="equipo flex">
                                            <img src="' . $grupo['UrlBandera'] . '">
                                            <p class="titulo">' . $grupo['Pais'] . '</p>';
                                        echo '</section>';
                                    }
                            }
                        }
                    echo '</div>';
                } ?>
            </section> 