<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    //Arithmetic Operators
    echo 8%5;
    echo " ";
    echo 5**5;
    echo " ";
    echo 5**2;
    echo " ";
?>
<?php
    //Assignment Operators
    $x = 100;
    $x += 20;

    echo $x;
    echo " ";
?>

<?php
    //Comparison Operators
    $x = 10;
    $y = 10;

    // "=" (x is equal to 5) "==" ("checking if x is equal to 5") "!==" (checking if x is not equal to y") "===" (if x is equal to y AND is the same datatype)

    if($x <> $y) {
        echo "True";
    } else {
        echo "False";
    }
    echo " ";
?>

<?php
    //Increment and Decrement Operators
    $x = 10;
    echo $x--;
    echo $x;
?>

<?php
    //Logical Operators
    $x = 20;
    $y = 20;

    if($x == $y xor 1 == 1){
        echo "True";
    } else {
        echo "False";
    }
?>


</body>
</html>