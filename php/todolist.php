<?php


session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit();
}
include "header2.php";



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 col-lg-4">

                </div>
                <div class="col-sm-6 col-lg-4 mt-50">
                    
                    <div class="col-12 text-center ">
                        <h3>kindly click here to add a new to do list to the system.</h3>

                    </div>
                    <div class="row mt-40">

                        <div class="col-12  text-center">
                            <a class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored" href="todolist2.php">
                                <i class="material-icons">add</i>
                            </a>
                        </div>

                        <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_kzfwp1ef.json"  background="transparent"  speed="1"  style="width: 500px; height: 400px;"  loop  autoplay></lottie-player>

                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">

                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
</body>

</html>