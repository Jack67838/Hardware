<?php 
require '../php/db.php';
$consulta = "SELECT * FROM hard_disk";
$resultado = mysqli_query($conn, $consulta);
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Hardware - Elenco</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <h1>Disco Rigido</h1>
    <div style="margin-bottom: 20px;">
        <a href="../menu.html" class='btn'>Menu</a>
        <a href="add-hard-disk.php" class="btn">Aggiungi nuovo disco</a>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>S/N</th>
                <th>Spazio</th>
                <th>Età</th>
                <th>Modello</th>
                <th>Azione</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_array($resultado)) { ?>
            <tr>
                <td><?php echo $row['Id']; ?></td>
                <td><?php echo $row['S/N']; ?></td>
                <td><?php echo $row['Space']; ?></td>
                <td><?php echo $row['Age']; ?></td>
                <td><?php echo $row['Model']; ?></td> 
                <td>
                    <a href="edit-hard-disk.php?id=<?php echo $row['Id']; ?>" class="btn-edit">Modificare</a>
                    <a href="db_operations.php?delete_id=<?php echo $row['Id']; ?>" 
                       onclick="return confirm('Confermi l\'eliminazione?');">Elimina</a>
                       
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>