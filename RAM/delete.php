<?php
require '../php/db.php';

if (isset($_GET['id'])) 
    $id = $_GET['id'];

    $sql = $conn->prepare("DELETE FROM ram WHERE Id = ?");
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        header("Location: ram.php"); 
        exit(); 
    } else {
        header("Location: ram.php?error=1");
        exit();
    }

    $sql->close();
?>