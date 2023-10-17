<?php
$conn = mysqli_connect('localhost','root','') or die("Error, conexion");
$bd = mysqli_select_db($conn,'prueba') or die("Error, Base de datos");
?>
