<?php 

//1. Configuración de la Base de Datos
$host = 'localhost';
$db   = 'hardware';
$user = 'root';
$pass = '';

// Create connection
$conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>