<?php 
session_start();
require '../php/db.php';

// ADD RAM
if(isset($_POST['save_ram'])){
    $Manufacturer = $_POST['Manufacturer'];
    $PN = $_POST['P/N'];
    $Capacity = $_POST['Capacity'];
    $Model = $_POST['Model'];
    

    $stmt = $conn->prepare("INSERT INTO ram (Manufacturer, `P/N`, Capacity, Model) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $Manufacturer, $PN, $Capacity, $Model);

    if($stmt->execute()){
        $_SESSION['status'] = "RAM inserita con successo";
        header("Location: ram.php"); 
    } else {
        header("Location: add-ram.php?error=1");
    }
    $stmt->close();
    exit();
}

// DELETE RAM
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $stmt = $conn->prepare("DELETE FROM ram WHERE Id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: ram.php"); 
    } else {
        header("Location: ram.php?error=delete");
    }
    $stmt->close();
    exit();
}

// UPDATE RAM
if(isset($_POST['update_ram'])){
    $id = $_POST['id'];
    $Manufacturer = $_POST['Manufacturer'];
    $PN = $_POST['P/N'];
    $Capacity = $_POST['Capacity'];
    $Model = $_POST['Model'];


    $stmt = $conn->prepare("UPDATE ram SET Manufacturer=?, `P/N`=?, Capacity=?, Model=? WHERE Id=?");
    $stmt->bind_param("sssssi", $Manufacturer, $PN, $Capacity, $Model, $id);

    if($stmt->execute()){
        header("Location: ram.php"); 
    } else {
        header("Location: edit-ram.php?id=$id&error=1");
    }
    $stmt->close();
    exit();
}
?>