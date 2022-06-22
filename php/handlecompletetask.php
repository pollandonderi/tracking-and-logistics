<?php

session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit();
}

include "configconnect.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>see your tasks here</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="card">
                <div class="card-header text-center">
                    <h5> HERE ARE YOUR TASKS</h5>
                </div>
                <div class="card-body">

                    <?php

                    $sql = "SELECT * FROM `todolist`";
                    $result = mysqli_query($link, $sql);

                    if ($result) {
                        $data = mysqli_num_rows($result);
                        if ($data > 0) {
                            echo " <table class='table table-striped table-bordered'>";

                            echo "<tr>";
                            echo "<th>#</th>";

                            echo "<th>what </th>";
                            echo "<th> who </th>";
                            echo "<th> time </th>";
                            echo "<th> date </th>";
                            echo "<th> additional</th>";
                            echo "<th> actions</th>";

                            echo "</tr>";

                            while ($row = mysqli_fetch_array($result)) {
                                echo "<tr>";
                                
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['what'] . "</td>";
                                echo "<td>" . $row['who'] . "</td>";
                                echo "<td>" . $row['time'] . "</td>";
                                echo "<td>" . $row['date'] . "</td>";
                                echo "<td>" . $row['additional'] . "</td>";
                                // echo "<td>" . $row['description'] . "</td>";
                                // echo "<td>" . $row['tmp-name'] . "</td>";
                                // echo "<td>" . $row['actions'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } 
                        else {
                            echo "no data was found!";
                        }
                    } else {
                        echo "error executing query $sql" . mysqli_error($link);
                    }






                    ?>
                </div>
            </div>
        </div>

    </div>
    <button type="button" class="btn btn-secondary"><a href="dashboard.php" class="card-link text-light">go back to dashboard</a></button>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>