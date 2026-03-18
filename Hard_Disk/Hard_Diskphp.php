<?php 
require '../php/db.php';

if (!$conn) {
    die("Error de conexión: " . mysqli_connect_error());
}

$consulta = "SELECT * FROM hard_disk";
$resultado = mysqli_query($conn, $consulta);
?>
