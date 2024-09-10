<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

//While and Do While Loops

    $x = 1;
    do {
        echo "hi there<br>";
        $x++;
    }
    while($x <= 5);

?>

<?php

//For Loops

for($x = 0; $x < 10; $x++){
    echo "hi<br>";
}

?>

<?php

//Foreach Loops

$array = array("Dan","Jane","Jacob","John","Marianne");

foreach($array as $loopdata){
    echo "my name is " .$loopdata."<br>";
}



?>




</body>
</html>