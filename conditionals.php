<?php
    include 'includes/header.php';
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
    $x = 2;

    if($x == 1){
        echo "Today is Monday.";
    }elseif($x == 2){
        echo "Today is Tuesday.";
    }
    elseif($x == 3){
        echo "Today is Wednesday.";
    }
    elseif($x == 4){
        echo "Today is Thursday.";
    }
    elseif($x == 5){
        echo "Today is Friday.";
    } else{
        echo "It is the weekend.";
    }


?>

<?php

    $x = 8;

    switch ($x){
        case 1:
            echo "You got 1 correct!";
            break;
        case 2:
            echo "You got 2 correct!";
            break;
        case 3:
            echo "You got 3 correct!";
            break;
        case 4:
            echo "You got 4 correct!";
            break;
        default:
        echo "You got none correct...";
    }

?>
  </body>
</html>