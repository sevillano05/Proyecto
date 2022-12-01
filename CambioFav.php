<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

$idEquipo = $_GET['idEquipo'];


$sql = "UPDATE usuarios SET EFavorito = '$idEquipo' WHERE usuarios.Id = $_SESSION[Id];";
$sqlfav = $conn->query($sql);
header('Location: index.php');

?>
