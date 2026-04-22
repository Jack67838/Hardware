<?php 
require '../php/db.php';

if(!isset($_GET['id'])) {
    header("Location: Hard_Disk.php");
    exit();
}

$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM hard_disk WHERE Id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$resultado = $stmt->get_result();
$disco = $resultado->fetch_assoc();

if(!$disco) {
    die("Disco no encontrado.");
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modifica Disco</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Modifica disco rigido</h1>
        <form action="db_operations.php" method="POST">
            <input type="hidden" name="id" autocomplete="off" value="<?php echo $disco['Id']; ?>">

            <div class="add">
                <label>Numero di serie</label><br>
                <input type="text" name="S/N" value="<?php echo $disco['S/N']; ?>" required autocomplete="off">
            </div>

            <div class="add">
                <label>Spazio</label><br>
                <input type="text" name="Space" value="<?php echo $disco['Space']; ?>" required autocomplete="off">
            </div>

            <div class="add">
                <label>Età / Anno</label><br>
                <input type="text" name="Age" value="<?php echo $disco['Age']; ?>" required autocomplete="off">
            </div>

            <div class="add">
                <label>Modello</label><br>
                <input type="text" name="Model" value="<?php echo $disco['Model']; ?>" required autocomplete="off">
            </div>

            <div class="add">
                <button type="submit" name="update_data" class='btn'>Aggiorna Dati</button><br><br>
                <a href="Hard_Disk.php" class='btn'>Annulla</a>
            </div>
        </form>
    </div>
</body>
</html>