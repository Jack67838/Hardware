<?php 
session_start();
require '../php/db.php';

// ADD PC
if(isset($_POST['save_pc'])){
    $PC = $_POST['PC'];
    $RAM = $_POST['RAM'];
    $CPU = $_POST['CPU'];
    $TYPE = $_POST['TYPE'];
    $RAM_Installed = $_POST['RAM_Installed'];
    $CPU_Installed = $_POST['CPU_Installed'];
    $TEXT = $_POST['Text'];

    $stmt = $conn->prepare("INSERT INTO pc (PC, RAM, CPU, `TYPE`, `RAM_Installed`, `CPU_Installed`, `text`) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $PC, $RAM, $CPU, $TYPE, $RAM_Installed, $CPU_Installed, $TEXT);

    if($stmt->execute()){
        $_SESSION['status'] = "PC inserito con successo";
        header("Location: pc.php"); 
    } else {
        header("Location: add-pc.php?error=1");
    }
    $stmt->close();
    exit();
}

// DELETE PC
if (isset($_GET['delete_id'])) {
    $id = $_GET['delete_id'];

    $stmt = $conn->prepare("DELETE FROM pc WHERE Id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: pc.php"); 
    } else {
        header("Location: pc.php?error=delete");
    }
    $stmt->close();
    exit();
}

// UPDATE PC
if(isset($_POST['update_pc'])){
    $id = $_POST['id'];
    $PC = $_POST['PC'];
    $RAM = $_POST['RAM'];
    $CPU = $_POST['CPU'];
    $TYPE = $_POST['TYPE'];
    $TEXT = $_POST['Text'];
    $RAM_Installed = $_POST['RAM_Installed'];
    $CPU_Installed = $_POST['CPU_Installed'];

    $stmt = $conn->prepare("UPDATE pc SET PC=?, RAM=?, CPU=?, `TYPE`=?, `RAM_Installed`=?, `CPU_Installed`=?, `text`=? WHERE Id=?");
    $stmt->bind_param("sssssssi", $PC, $RAM, $CPU, $TYPE, $RAM_Installed, $CPU_Installed, $TEXT, $id);

    if($stmt->execute()){
        header("Location: pc.php"); 
    } else {
        header("Location: edit-pc.php?id=" . $id . "&error=1");
    }
    $stmt->close();
    exit();
}
?>