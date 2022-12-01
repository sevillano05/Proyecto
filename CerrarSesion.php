<?php
   session_start();
   unset($_SESSION["usuario"]);
   unset($_SESSION["contraseña"]);
   session_unset();
   
   
   header('Refresh: 1; URL = index.php');
?>