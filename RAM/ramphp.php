<?php 
require '../php/db.php';

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM ram";
$resultado = mysqli_query($conn, $consulta);
?>
