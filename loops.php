<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//While Loops
$x = 1;

while($x <= 5){
    echo "hi there<br>";
    $x++;
}



//Do While Loops

    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while($x <= 5);



//For Loops

for($x = 0; $x < 10; $x++){
    echo "hi<br>";
}



//Foreach Loops

$array = array("Dan","Jane","Jacob","John","Marianne");

foreach($array as $loopdata){
    echo "my name is " .$loopdata."<br>";
}



?>




</body>
</html>