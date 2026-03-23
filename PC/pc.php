<?php 
require '../php/db.php';
$consulta = "SELECT * FROM pc";
$resultado = mysqli_query($conn, $consulta);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Hardware - PC</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Elenco PC</h1>
    <div style="margin-bottom: 20px;">
        <a href="../menu.html" class='btn'>Menu</a>
        <a href="add-pc.php" class="btn">Aggiungi Nuovo PC</a>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>PC</th>
                <th>RAM</th>
                <th>CPU</th>
                <th>Tipo</th>
                <th>Descrizione</th>
                <th>Azioni</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['PC']; ?></td>
                <td><?php echo $row['RAM']; ?></td>
                <td><?php echo $row['CPU']; ?></td>
                <td><?php echo $row['TYPE']; ?></td> 
                <td><?php echo $row['text']; ?></td>
                <td>
                    <a href="pc_operations.php?delete_id=<?php echo $row['Id']; ?>" 
                       onclick="return confirm('Sei sicuro di voler eliminare questo PC?');">Elimina</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>