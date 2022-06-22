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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/header.css">
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become a seller on our platform</title>
</head>
<body>
 <div class="container-fluid">
    <div class="row">
        <div class="col-sm-8 col-md-6 col-lg-4"></div>
        <div class="col-sm-8 col-md-6 col-lg-4">
            <h3 class="text-center text-white">Become a seller on our platform</h3>
            <div class="row d-flex justify-content-center">
            <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_9kdbftpx.json"  background="rgba(0, 0, 0, 0.1)"  speed="1"  style="width: 500px; height: 500px;"  loop  autoplay></lottie-player>
            <div class="row m-4">
                <div class="col-2 "></div>
                <div class="col-8 text-center">
                    <div class="row">
                <a href="sell2.php" class="btn btn-success"> Apply here</a>
                </div>
                </div>
                <div class="col-2 "></div>
            </div>
        </div>
        </div>
        <div class="col-sm-8 col-md-6 col-lg-4"></div>
    </div>
 </div>
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>