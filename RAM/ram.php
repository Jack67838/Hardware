<?php 
require '../php/db.php';
$consulta = "SELECT * FROM ram";
$resultado = mysqli_query($conn, $consulta);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Hardware - RAM</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Elenco RAM</h1>
    <div style="margin-bottom: 20px;">
        <a href="../menu.html" class='btn'>Menu</a>
        <a href="add-ram.php" class="btn">Aggiungi Nuova RAM</a>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Produttore</th>
                <th>P/N</th>
                <th>Capacità</th>
                <th>Modello</th>
                <th>Azione</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['Manufacturer']; ?></td>
                <td><?php echo $row['P/N']; ?></td>
                <td><?php echo $row['Capacity']; ?></td>
                <td><?php echo $row['Model']; ?></td> 
                <td>
                    <a href="ram_operations.php?delete_id=<?php echo $row['Id']; ?>" 
                       onclick="return confirm('Confermi l\'eliminazione?');">Elimina</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>