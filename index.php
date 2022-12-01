<!-- Integrantes
Antonio Sevillano 
Yitxiel Yatheman
Carlos Zengh
-->
<?php session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proyecto";

error_reporting(E_ERROR | E_PARSE);

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = "Home";
}
$idEquipo = $_GET['idEquipo']
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mundial Qatar 2022</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Home.css">
    <?php if ($page == 'Grupos') {?><link rel="stylesheet" href="css/Grupos.css"> <?php }
    if ($page == 'Jugadores') {?><link rel="stylesheet" href="css/Jugadores.css"> <?php }
    if ($page == 'Favorito') {?><link rel="stylesheet" href="css/Favorito.css"> <?php }
    if ($page == 'Clasificacion') {?><link rel="stylesheet" href="css/Clasificacion.css"> <?php } ?>
</head>
<body>
    
    <?php //Mensaje de error
    if ($conn->connect_error) {
        echo '<section class="error">
                <img src="https://cdn3.iconfinder.com/data/icons/user-interface-21/32/1026-512.png" alt="">
                <p class="error"> Error número: '.mysqli_connect_errno().
                '<br>
                mensaje de error: '.mysqli_connect_error().
             '</section>';
    
        exit();
        die("Connection failure: " . $conn->connect_error);
    } 
    if (!file_exists('Templates/'.$page.'.php')) {
        echo '<section class="e404">
                <img src="https://istamps.net/wp-content/uploads/2019/09/404-1-1024x498.png" alt="">
                <p></p>
             </section>';
    
        die();
    }elseif ($page == 'Home'){
        include('Templates/'.$page.'.php');
    }else{
        include("Templates/nav_bar.php");
        include('Templates/'.$page.'.php');
    }
$conn->close();
?>
