<?php 
require '../php/db.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM pc WHERE Id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$pc = $stmt->get_result()->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Modifica PC</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Modifica PC</h1>
        <form action="pc_operations.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $pc['Id']; ?>">
            <div class="add">
                <label>PC</label><br>
                <input type="text" name="PC" value="<?php echo $pc['PC']; ?>" required autocomplete="off">
            </div>
            <div class="add">
                <label>RAM</label><br>
                <input type="text" name="RAM" value="<?php echo $pc['RAM']; ?>" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>CPU</label><br>
                <input type="text" name="CPU" value="<?php echo $pc['CPU']; ?>" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Tipo</label><br>
                <input type="radio" id="laptop" name="TYPE" value="Laptop" <?php echo ($pc['TYPE'] == 'Laptop') ? 'checked' : ''; ?> required>
                <label for="laptop" class="radio-button">Laptop</label>
                <input type="radio" id="desktop" name="TYPE" value="Desktop" <?php echo ($pc['TYPE'] == 'Desktop') ? 'checked' : ''; ?>>
                <label for="desktop" class="radio-button">Desktop</label>
            </div>
            <div class="add">
                <label>Descrizione / Note</label><br>
                <input type="text" name="Text" value="<?php echo $pc['text']; ?>" required autocomplete="off" />
            </div>
            <div class="add">
                <button type="submit" name="update_pc" class='btn'>Aggiorna Dati</button>
                <br><br>
                <a href="pc.php" class='btn'>Annulla</a>
            </div>
        </form>
    </div> 
</body>
</html>