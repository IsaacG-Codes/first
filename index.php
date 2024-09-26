<?php
    include_once 'includes/dbh.inc.php';
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



<form method="GET">
    <input type= "text" name="edible">
    <button>SUBMIT</button>
</form>
<?php
    $name = $_GET['edible'];
    echo $name." is totally edible!!!";
?>

<?php
      $sql = "SELECT * FROM users;";
      $result = mysqli_query($conn, $sql);
      $resultCheck = mysqli_num_rows($result);

      if($resultCheck > 0) {
        while($row = mysqli_fetch_assoc($result)){
          echo $row['user_uid'];
        }
      }
    ?>
  </body>
</html>