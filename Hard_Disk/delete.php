<?php
require '../php/db.php';

if (isset($_GET['id'])) 
    $id = $_GET['id'];

    $sql = $conn->prepare("DELETE FROM hard_disk WHERE Id = ?");
    $sql->bind_param("i", $id);

    if ($sql->execute()) {
        header("Location: Hard_Disk.php"); 
        exit(); 
    } else {
        header("Location: Hard_Disk.php?error=1");
        exit();
    }

    $sql->close();
?>