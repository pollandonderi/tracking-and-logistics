<?php




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>set your reminder</title>
</head>

<body>
    <?php

    $dayweek = date('w');
    // echo "$dayweek";
    switch ($dayweek) {
        case 1:
            echo "this is the day you pick your goods";
            break;
        case 2:
            echo "today is inventory day!";
            break;
        case 3:
            echo "This is sales day ";
            break;
        case 3:
            echo "Do some promotion";
            break;
        case 4:
            echo "Work on the pending supplier complaints";
            break;
        case 5:
            echo "Discuss meet with your accountant";
            break;
        case 6:
            echo "We go to church yaay";
            break;
        case 7:
            echo "Family day and trip day.";
            break;
    }



    ?>

</body>

</html>