<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accedi</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class='log'>
        <h1>Accedi</h1>
        <form action="php/Loginphp.php" method="post"> 
            <label>Utente</label><br>
            <input type="text" name="user" placeholder="Nome utente" required><br><br>
            
            <label>Password</label><br>
            <input type="password" name="password" placeholder="Password" required><br><br>

            <div class="re">
                <button type="submit"> Accedi</button>
            </div>
        </form>
    </div>
</body>
</html>