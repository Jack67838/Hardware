<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi Nuova RAM</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Aggiungi Nuova RAM</h1>
        <form action="ram_operations.php" method="POST">
            <div class="add">
                <label>Produttore</label><br>
                <input type="text" name="Manufacturer" required autocomplete="off">
            </div>
            <div class="add">
                <label>P/N</label><br>
                <input type="text" name="P/N" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Capacità</label><br>
                <input type="text" name="Capacity" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Modello</label><br>
                <input type="text" name="Model" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>installato</label><br>
                <input type="radio" id="SÍ" name="Installed" value="SÍ" required>
                <label for="SÍ" class="radio-button">SÍ</label>

                <input type="radio" id="No" name="Installed" value="No">
                <label for="No" class="radio-button">NO</label>
            </div>
            <div class="add">
                <button type="submit" name="save_ram" class='btn'>Salva Dati</button><br><br>
                <a href="ram.php" class='btn'>Torna indietro</a>
            </div>
        </form>
    </div>
</body>
</html>