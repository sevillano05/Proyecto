<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

$idEquipo = $_GET['idEquipo'];

if ($_SESSION) {
    $sql = "UPDATE usuarios SET EFavorito = '$idEquipo' WHERE usuarios.Id = $_SESSION[Id];";
    $sqlfav = $conn->query($sql);
    $_SESSION["favorito"] = $idEquipo;
    header('Location: index.php');
}else {
    echo '<section class="error">
                <img src="https://cdn3.iconfinder.com/data/icons/user-interface-21/32/1026-512.png" alt="">
                <p class="error"> Para seleccionar Favoritos debes iniciar sesión</p>
                <a href="index.php">Volver al Inicio</a>
            </section>';
}


?>
