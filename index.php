<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>My first website</h1>
    <?php
    echo "My first website";
    ?>

<form method="food">
    <input type= "text" name="edible">
    <button>SUBMIT</button>
</form>
<?php
    $name = $_food['edible'];
    echo $name." is totally edible!!!";
?>
</body>
</html>