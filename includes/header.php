<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" integrity="sha384-dpuaG1suU0eT09tx5plTaGMLBsfDLzUCCUXOY2j/LSvXYuG6Bqs43ALlhIqAJVRb" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        
</head>
<body>
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Home Page</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        <a class="nav-link" href="arrays.php">arrays</a>
        <a class="nav-link" href="calculator.php">calculator</a>
        <a class="nav-link" href="calendar.php">calendar</a>
        <a class="nav-link" href="conditionals.php">conditionals</a>
        <a class="nav-link" href="datatypes.php">datatypes</a>
        <a class="nav-link" href="functions.php">functions</a>
        <a class="nav-link" href="loops.php">loops</a>
        <a class="nav-link" href="operators.php">operators</a>
        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>

<?php

$_SESSION['username'] = "Isaac1234G";
echo $_SESSION['username'];

if(!isset($_SESSION['username'])){
echo "You are not logged in!";

}
else {
  echo "You are logged in.";
}
?>

</body>
</html>