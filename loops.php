<?php
    include 'includes/header.php';
    include_once 'includes/dbh.inc.php';
?>
<!doctype html>
<html lang="eng">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">

    <title>Hello world!</title>
  </head>
  <body>
    <h1>Hello world!</h1>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

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