<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <div class="new">
    <h1>Add new disk</h1>
    <form action="add_hard_diskphp.php" method="POST" >
        <div class="add">
            <label for="">S/N</label><br>
            <input type="text" name="S/N" autocomplete="off">
        </div>
        <div class="add">
            <label for="">Space</label><br>
            <input type="text" name="Space" autocomplete="off"/>
        </div>
        <div class="add">
            <label for="">Age</label><br>
            <input type="text" name="Age" autocomplete="off"/>
        </div>
        <div class="add">
            <label for="">Model</label><br>
            <input type="text" name="Model" autocomplete="off"/>
        </div>
        <div class="add">
            <button type="submit" name="save_data" class='btn'>Save Data</button>
            <a href="Hard_Disk.php" class='btn'>Go back</a>
        </div>
    </form>
    </div>
</body>
</html>