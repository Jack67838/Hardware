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
                <label>Modello</label><br>
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
                <label for="desktop" class="radio-button">Desktop</label><br>

                <input type="radio" id="server" name="TYPE" value="server" required>
                <label for="server" class="radio-button">Server</label>

                <input type="radio" id="mini-pc" name="TYPE" value="mini-pc" required>
                <label for="mini-pc" class="radio-button">Mini-pc</label><br>

                <input type="radio" id="All in one" name="TYPE" value="All in one">
                <label for="All in one" class="radio-button">All in one</label>
            </div>
            
            <div class="add">
                <label>RAM Installata</label><br>
                <input type="radio" id="ram_si" name="RAM_Installed" value="SÌ" required>
                <label for="ram_si" class="radio-button">SÌ</label>

                <input type="radio" id="ram_no" name="RAM_Installed" value="NO">
                <label for="ram_no" class="radio-button">NO</label>
            </div>

            <div class="add">
                <label>CPU Installata</label><br>
                <input type="radio" id="cpu_si" name="CPU_Installed" value="SÌ" required>
                <label for="cpu_si" class="radio-button">SÌ</label>

                <input type="radio" id="cpu_no" name="CPU_Installed" value="NO">
                <label for="cpu_no" class="radio-button">NO</label>
            </div>

            <div class="add">
    <label>Descrizione / Note</label><br>
    <textarea name="Text" required></textarea>
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