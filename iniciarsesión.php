<?php
session_start();
$usuario = $_POST['uname'];
$contraseña = $_POST['psw'];

$servidor='localhost';
$Usuario='root';
$Contraseña='';
$Base_de_datos='proyecto';

$conexion_bd = @new mysqli($servidor,$Usuario,$Contraseña,$Base_de_datos);
if($conexion_bd->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}

$queryUsuario = "SELECT  Id, Username, Contraseña, EFavorito FROM usuarios where Username = '$usuario' and contraseña = '$contraseña'";
$login = $conexion_bd->query($queryUsuario);
$resultado = $login->fetch_all(MYSQLI_ASSOC);
if ($usuario == $resultado[0]["Username"] || $contraseña == $login[0]["contraseña"]) {

    $_SESSION["Id"] = $resultado[0]["Id"];
    $_SESSION["usuario"] = $usuario;
    $_SESSION["contraseña"] = $contraseña;
    $_SESSION["favorito"] = $resultado[0]["EFavorito"];


    header("Location: index.php");
} else {

    echo "El usuario o la contraseña son incorrectos";
}