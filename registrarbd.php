<?php

$usuarios = $_POST['uname'];
$contraseña = $_POST['psw'];
$email = $_POST['email'];

$servidor='localhost';
$Usuario='root';
$Contraseña='';
$Base_de_datos='proyecto';

$conexion_bd = @new mysqli($servidor,$Usuario,$Contraseña,$Base_de_datos);
if($conexion_bd->connect_errno){
    echo "Error al conectar con la base de datos";
    exit();
}

$queryUsuario = "INSERT INTO usuarios (Username, Contraseña, Email) VALUES ('$usuarios', '$contraseña', '$email')";
$registrar = $conexion_bd->query($queryUsuario);

header("Location: login.php");
?>