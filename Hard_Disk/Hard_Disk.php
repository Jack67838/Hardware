<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hardware</title>
    <link rel="stylesheet" href="../css/style.css">
    <?php include("Hard_Diskphp.php"); ?>
</head>
<body>
    <h1>Hard-Disk</h1>
    <div style="margin-botton: 20px;">
    <a href="../menu.html" class='btn'>Menu</a>
    <a href="add-hard-disk.php" class="btn">Add New Disk</a>
    </div><br>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>S/N</th>
                <th>Space</th>
                <th>Age</th>
                <th>Model</th>
            </tr>
        </thead>
        <tbody>
    <?php 
    while($row = mysqli_fetch_array($resultado)) { 
    ?>
        <tr>
            <td><?php echo $row['Id']; ?></td>
            <td><?php echo $row['S/N']; ?></td>
            <td><?php echo $row['Space']; ?></td>
            <td><?php echo $row['Age']; ?></td>
            <td><?php echo $row['Model']; ?></td> 
            <td>
                <form action="delete.php" method="GET" style="margin:0;">
                    <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                    <input type="submit" name="enviar" value="Delete" onclick="return confirm('Confirm to delete');">
                </form>
            </td>
        </tr>
    <?php 
    }
    ?>
        </tbody>
    </table>
</body>
</html>