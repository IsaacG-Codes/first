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