<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi Nuovo Disco</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Aggiungi nuovo disco</h1>
        <form action="db_operations.php" method="POST">
            <div class="add">
                <label>Numero di serie</label><br>
                <input type="text" name="S/N" required autocomplete="off">
            </div>
            <div class="add">
                <label>Spazio</label><br>
                <input type="text" name="Space" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Età / Anno</label><br>
                <input type="text" name="Age" required autocomplete="off"/>
            </div>
            <div class="add">
                <label>Modello</label><br>
                <input type="text" name="Model" required autocomplete="off"/>
            </div>
            <div class="add">
                <button type="submit" name="save_data" class='btn'>Salva Dati</button><br><br>
                <a href="Hard_Disk.php" class='btn'>Torna indietro</a>
            </div>
        </form>
    </div>
</body>
</html>