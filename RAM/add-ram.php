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
    <form action="add-ramphp.php" method="POST" >
        <div class="add">
            <label for="">Manufacturer</label><br>
            <input type="text" name="Manufacturer" autocomplete="off">
        </div>
        <div class="add">
            <label for="">P/N</label><br>
            <input type="text" name="P/N" autocomplete="off"/>
        </div>
        <div class="add">
            <label for="">Capacity</label><br>
            <input type="text" name="Capacity" autocomplete="off"/>
        </div>
        <div class="add">
            <label for="">Model</label><br>
            <input type="text" name="Model" autocomplete="off"/>
        </div>
        <div class="add">
            <button type="submit" name="save_data" class='btn'>Save Data</button>
            <a href="ram.php" class='btn'>Go back</a>
        </div>
    </form>
    </div>
</body>
</html>