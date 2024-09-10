<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
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