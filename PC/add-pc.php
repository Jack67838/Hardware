<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Aggiungi Nuovo PC</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
        <h1>Aggiungi Nuovo PC</h1>
        
        <form action="pc_operations.php" method="POST">
            <div class="add">
                <label>PC</label><br>
                <input type="text" name="PC" required autocomplete="off">
            </div>

            <div class="add">
                <label>RAM</label><br>
                <input type="text" name="RAM" required autocomplete="off"/>
            </div>

            <div class="add">
                <label>CPU</label><br>
                <input type="text" name="CPU" required autocomplete="off"/>
            </div>

            <div class="add">
                <label>Tipo</label><br>
                <input type="radio" id="laptop" name="TYPE" value="Laptop" required>
                <label for="laptop" class="radio-button">Laptop</label>

                <input type="radio" id="desktop" name="TYPE" value="Desktop">
                <label for="desktop" class="radio-button">Desktop</label>
            </div>

            <div class="add">
                <label>Descrizione / Note</label><br>
                <input type="text" name="Text" required autocomplete="off"/>
            </div>

            <div class="add">
                <button type="submit" name="save_pc" class='btn'>Salva Dati</button>
                <br><br>
                <a href="pc.php" class='btn'>Torna indietro</a>
            </div>
        </form>
    </div> 
</body>
</html>