<?php 
session_start();
require '../php/db.php';

if(isset($_POST['save_data'])){
    $Manufacturer = $_POST['Manufacturer'];
    $PN = $_POST['P/N'];
    $Capacity = $_POST['Capacity'];
    $Model = $_POST['Model'];

    $query = "INSERT INTO ram (Manufacturer,`P/N`, Capacity, Model) VALUES ('$Manufacturer','$PN', '$Capacity', '$Model')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
    $_SESSION['status'] = "Inserted Successfully";
    header("Location: add-ram.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully"; header("Location: ram.php");
        header("location; ram.php");
        exit(0);
    }
}
?>