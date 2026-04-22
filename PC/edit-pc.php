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
                <label>Modello</label><br>
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
                <label for="desktop" class="radio-button">Desktop</label><br>

                <input type="radio" id="server" name="TYPE" value="server" <?php echo ($pc['TYPE'] == 'server') ? 'checked' : ''; ?>>
                <label for="server" class="radio-button">Server</label>

                <input type="radio" id="mini-pc" name="TYPE" value="mini-pc" <?php echo ($pc['TYPE'] == 'mini-pc') ? 'checked' : ''; ?>>
                <label for="mini-pc" class="radio-button">Mini-pc</label><br>

                <input type="radio" id="All in one" name="TYPE" value="All in one" <?php echo ($pc['TYPE'] == 'All in one') ? 'checked' : ''; ?>>
                <label for="All in one" class="radio-button">All in one</label>
            </div>

            <div class="add">
                <label>RAM Installata</label><br>
                <input type="radio" id="ram_si" name="RAM_Installed" value="SÌ" <?php echo ($pc['RAM_Installed'] == 'SÌ') ? 'checked' : ''; ?> required>
                <label for="ram_si" class="radio-button">SÌ</label>

                <input type="radio" id="ram_no" name="RAM_Installed" value="NO" <?php echo ($pc['RAM_Installed'] == 'NO') ? 'checked' : ''; ?>>
                <label for="ram_no" class="radio-button">NO</label>
            </div>

            <div class="add">
                <label>CPU Installata</label><br>
                <input type="radio" id="cpu_si" name="CPU_Installed" value="SÌ" <?php echo ($pc['CPU_Installed'] == 'SÌ') ? 'checked' : ''; ?> required>
                <label for="cpu_si" class="radio-button">SÌ</label>

                <input type="radio" id="cpu_no" name="CPU_Installed" value="NO" <?php echo ($pc['CPU_Installed'] == 'NO') ? 'checked' : ''; ?>>
                <label for="cpu_no" class="radio-button">NO</label>
            </div>

            <div class="add">
                <label>Descrizione / Note</label><br>
                <textarea name="Text" required><?php echo $pc['text']; ?></textarea>
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