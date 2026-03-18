<?php 
session_start();
require '../php/db.php';

if(isset($_POST['save_data'])){
    $SN = $_POST['S/N'];
    $Space = $_POST['Space'];
    $Age = $_POST['Age'];
    $Model = $_POST['Model'];

    $query = "INSERT INTO hard_disk (`S/N`,Space, Age, Model) VALUES ('$SN', '$Space', '$Age', '$Model')";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
    $_SESSION['status'] = "Inserted Successfully";
    header("Location: add-hard-disk.php");
    }
    else{
        $_SESSION['status'] = "Inserted Successfully"; header("Location: Hard_Disk.php");
        header("location; Hard_Disk.php");
        exit(0);
    }
}
?>