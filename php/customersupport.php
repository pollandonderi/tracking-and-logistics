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
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="row text-center">
                <h5><b>our 24/7 agents are on standby to help you </b></h5>
            </div>
            <div class="col-sm-4 col-lg-4  d-flex justify-content-center">
                <lottie-player src="https://assets9.lottiefiles.com/private_files/lf30_wbszjekz.json" background="transparent" speed="1" style="width: 300px; height: 300px;" loop autoplay></lottie-player>
            </div>
            <div class="col-sm-4 col-lg-4 d-flex  flex-column justify-content-center ">
                <div class="row">
                    <div class="col-6 ">
                        <h5>Reach us on:</h5>
                        <p>+254 795 836 437</p>
                        <p>+254 795 836 437</p>
                        <p>+254 795 836 437</p>
                    </div>
                    <div class="col-6">
                        <h5>visit us on :</h5>
                        <p>RED AVENUE</p>
                        <p>OPPOSITE SHANSA HOTEL 3rd suite</p>
                        <p> Third floor</p>
                    </div>
                </div>

            </div>
            <div class="col-sm-4 col-lg-4  d-flex align-items-center">
                <div class="card" style="width: 21rem;">
                    <div class="card-body bg-dark text-center">
                        <h5 class="card-title text-white">Connect with us in</h5>
                        <h6 class="card-subtitle mb-2 text-muted text-white">Mail</h6>
                        <p class="card-text text-white">Send us an email.</p>
                        <a href="#" class="card-link text-white">pollandsabisa@gmail.com</a>
                        <a href="#" class="card-link text-white">samwelkusinyi@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row bg-light">
            <h5 class="text-center">on using our new feature- Search for a connection</h5>
            <div class="col-lg-6 text-center">
                <h3>on searching for a connection</h3>
                <span>you can search through the wide array of users who have applied to be also searching for a connection.</span>
                <p>this will help you get to the desired people who will facilitate your import of goods or even enable exports of products</p>
                <p>In case of an event where you cant find the desired customer, kindly apply on the dashboard via the connect button on the menu to apply and wait to be contacted by the prospective customer of your choice.</p>
            </div>
            <div class="col-lg-6">
                <img src="../images/connect.png" alt="connection" srcset="">
            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>