<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php


function triangle($x, $y){
    $area_triangle = $x * $y / 2;
    echo "Area of your triangle: ".$area_triangle."<br>";
}

?>
<?php

$x = 100;
$y = 50;
triangle($x, $y);


$a = 10;
$b = 5;
triangle($a, $b);
?>



</body>
</html>