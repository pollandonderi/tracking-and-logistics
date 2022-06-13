<?php


session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit();
}
// include "header2.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/contactus.css">


</head>

<body>
    <div class="container-fluid">
        <div class="row ">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 bg-dark">
                <div class="card darkcard">
                    <div class="card-title text-center">
                        <h4>Hello ,connect now to fill a single unit container</h4>
                        <hr>
                    </div>
                    <div class="card-body text-center">
                        <div class="row">
                            <form action="handleconnect.php" method="post" enctype="multipart/form-data">


                                <div class="row m-4">
                                <label class=""> Full Name</label><br>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" name="fullname" type="text" id="sample3"required>
                                        <label class="mdl-textfield__label" for="sample3">Your Name...</label>
                                    </div>
                                    
                                </div>

                                <div class="row m-4">
                                <label>Email</label><br>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" name="email" type="text" id="sample3" required>
                                        <label class="mdl-textfield__label" for="sample3">Your Email...</label>
                                    </div>
                                   
                                </div>
                                <div class="row m-4  d-flex justify-items-center">
                                <label>Expected weight of freight</label><br>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" name="weight" type="text" pattern="-?[0-9]*(\.[0-9]+)?" id="sample4" required>
                                        <label class="mdl-textfield__label" for="sample4">Tonnage of freight</label>
                                        <span class="mdl-textfield__error">Input is not a number!</span>
                                        
                                    </div>
                                   
                                </div>
                                <div class="row m-4">
                                <label>Expected space coverage</label><br>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" name="space" type="text" id="sample3" required>
                                        <label class="mdl-textfield__label" for="sample3">m*2 covered...</label>
                                    </div>

                                 
                                </div>
                                <div class="row m-4">
                                <label>Any other important information</label><br>
                                    <div class="mdl-textfield mdl-js-textfield">
                                        <textarea class="mdl-textfield__input" name="description" type="text" rows="3" id="sample5" required></textarea>
                                        <label class="mdl-textfield__label" for="sample5">write here...</label>
                                    </div>
                                   
                                </div>
                                <div class="row m-4">
                                <label> Your Picture</label><br>
                                <input type="file" name="picture">
                                   
                                </div>
                                <div class="row m-4">
                                    <div class="col-4">

                                    </div>
                                    <div class="col-4">
                                    <label> Preferred day of imports</label><br>
                                        <input type="date" name=" date" class="connet rounded-pill bg-light"required><br>
                                        

                                    </div>
                                    <div class="col-4">

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col-4">

                                    </div>
                                    <div class="col-4">
                                        <button type="submit" value="submit" class="btn btn-success" name="connectclients">Submit connection request</button>

                                    </div>
                                    <div class="col-4">

                                    </div>

                                </div>






                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>

</html>