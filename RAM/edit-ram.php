<?php 
require '../php/db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM ram WHERE Id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$ram = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modifica RAM</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Modifica RAM</h1>
        <form action="ram_operations.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $ram['Id']; ?>">
            <div class="add">
                <label>Produttore</label><br>
                <input type="text" name="Manufacturer" value="<?php echo $ram['Manufacturer']; ?>" required autocomplete="off">
            </div>
            <div class="add">
                <label>P/N</label><br>
                <input type="text" name="P/N" value="<?php echo $ram['P/N']; ?>" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Capacità</label><br>
                <input type="text" name="Capacity" value="<?php echo $ram['Capacity']; ?>" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Modello</label><br>
                <input type="text" name="Model" value="<?php echo $ram['Model']; ?>" required autocomplete="off"/>
            </div>
                <div class="add">
                <input type="radio" id="SI" name="Installed" value="SÌ" <?php echo ($ram['Installed'] == 'SÌ') ? 'checked' : ''; ?> required>
                <label for="SI" class="radio-button">SÌ</label>

                <input type="radio" id="NO" name="Installed" value="NO" <?php echo ($ram['Installed'] == 'NO') ? 'checked' : ''; ?>>
                <label for="NO" class="radio-button">NO</label>
            </div>
            <div class="add">
                <button type="submit" name="update_ram" class='btn'>Aggiorna Dati</button><br><br>
                <a href="ram.php" class='btn'>Annulla</a>
            </div>
        </form>
    </div>
</body>
</html>