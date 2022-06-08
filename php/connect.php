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
                            <form>
                                <div class="row m-4">
                                    <input name="Fullname" class="connect rounded-pill bg-light" required><br>
                                    <label class=""> Full Name</label><br>
                                </div>

                                <div class="row m-4">
                                    <input type="email" name="connectemail" class="connect rounded-pill bg-light" required><br>
                                    <label>Email</label><br>
                                </div>
                                <div class="row m-4">
                                    <input type="text" name="weight" class="connect rounded-pill bg-light"><br>
                                    <label>Tonnage of freightt</label><br>
                                </div>
                                <div class="row m-4">
                                    <input type="text" name="space" class="connect rounded-pill bg-light"><br>
                                    <label>Expected space coverage</label><br>
                                </div>
                                <div class="row m-4">
                                    <textarea type="text" name="description" class="connect rounded-pill bg-light"></textarea><br>
                                    <label>Any other important information</label><br>
                                </div>
                                <div class="row m-4">
                                    <div class="col-4">

                                    </div>
                                    <div class="col-4">
                                    <input type="date" name="" class="connet rounded-pill bg-light"><br>
                                    <label> Preferred day of imports</label><br>

                                    </div>
                                    <div class="col-4">

                                    </div>
                                   
                                </div>
                                <div class="row">
                                    <div class="col-4">

                                    </div>
                                    <div class="col-4">
                                        <button type="button" class="btn btn-success">Submit connection request</button>

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>