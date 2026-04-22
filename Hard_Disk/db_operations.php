<?php 
session_start();
require '../php/db.php';

// ADD DISCO
if(isset($_POST['save_data'])){
    $SN = $_POST['S/N'];
    $Space = $_POST['Space'];
    $Age = $_POST['Age'];
    $Model = $_POST['Model'];
    
    $stmt = $conn->prepare("INSERT INTO hard_disk (`S/N`, Space, Age, Model) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $SN, $Space, $Age, $Model);

    if($stmt->execute()){
        $_SESSION['status'] = "Inserito con successo";
        header("Location: Hard_Disk.php"); 
    } else {
        header("Location: add-hard-disk.php?error=1");
    }
    $stmt->close();
    exit();
}

// DELETE DISCO
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $stmt = $conn->prepare("DELETE FROM hard_disk WHERE Id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: Hard_Disk.php"); 
    } else {
        header("Location: Hard_Disk.php?error=delete");
    }
    $stmt->close();
    exit();
}

// UPDATE DISCO
if(isset($_POST['update_data'])){
    $id = $_POST['id'];
    $SN = $_POST['S/N'];
    $Space = $_POST['Space'];
    $Age = $_POST['Age'];
    $Model = $_POST['Model'];

    $stmt = $conn->prepare("UPDATE hard_disk SET `S/N`=?, Space=?, Age=?, Model=? WHERE id=?");
    $stmt->bind_param("ssssi", $SN, $Space, $Age, $Model, $id);

    if($stmt->execute()){
        $_SESSION['status'] = "Aggiornato con successo";
        header("Location: Hard_Disk.php"); 
    } else {
        header("Location: edit-hard-disk.php?id=$id&error=1");
    }
    $stmt->close();
    exit();
}
?>