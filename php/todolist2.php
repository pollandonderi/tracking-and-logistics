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
                <div class="col-sm-6 col-lg-4 mt-50 bg-light">

                    <div class="col-12 text-center ">
                        <h3>kindly add a new task here to add a new list to the system.</h3>

                    </div>
                    <div class="row mt-40 ">

                        <div class="col-12  text-center">
                            <button class="mdl-button mdl-js-button mdl-button--icon mdl-button--colored">
                                <i class="material-icons">mood</i>
                            </button>
                        </div>



                    </div>
                    <form action="handletodo.php" method="post">
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="what">
                            <label class="mdl-textfield__label" for="sample3">what is to be done?...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="who">
                            <label class="mdl-textfield__label" for="sample3">Who is to do it?...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="time" id="sample3" name="time">
                            <label class="mdl-textfield__label" for="sample3">By what time should it be done?...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="date" id="sample3" name="date">
                            <label class="mdl-textfield__label" for="sample3">by what date is it supposed to have been completed?...</label>
                        </div>
                        <div class="mdl-textfield mdl-js-textfield">
                            <textarea class="mdl-textfield__input" type="text" rows="3" id="sample5" name="additional"></textarea>
                            <label class="mdl-textfield__label" for="sample5">Anything else you would like to remember?...</label>
                        </div>
                        <div class="row text-center">
                            <button type="submit" name="todolist" class="btn btn-success">Add list</button>
                        </div>

                    </form>
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