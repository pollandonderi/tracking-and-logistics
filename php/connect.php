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

</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6 bg-dark">
                <div class="card .connect">
                    <div class="card-title text-center">
                        <h5>Connect now to fill a single unit container</h5><hr>
                    </div>
                    <div class="card-body text-center">
                        <form>
                            <input name="" style="border: none; border-bottom:2px solid blue" class="m-2"><br>
                            <label class="m-2">Name</label><br>
                            <input type="date" name=""><br>
                            <label class="m-2">Day of imports</label><br>
                            <input type="email" name=""><br>
                            <label class="m-2">Email</label><br>

                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>