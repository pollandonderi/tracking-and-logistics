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
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/header.css">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Apply today</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-4 col-md-3 col-lg-2"></div>
            <div class="col-sm-8 col-md-6 col-lg-8 bg-light h-100 m-4">
                <form action="handlesell2.php" method="post" enctype="multipart/form-data">

                    <div class="row d-flex justify-content-center">
                        <span class="text-center">Product Name</span>
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="product_name" required>
                            <label class="mdl-textfield__label" for="sample3">Name of the product you are selling...</label>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                    <span class="text-center">Product Price</span>
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="product_price" required>
                            <label class="mdl-textfield__label" for="sample3">Ener your product price in dollars...</label>
                        </div>
                    </div>

                    <div class="row d-flex justify-content-center">
                    <span class="text-center">Product Quantity</span>
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="int" id="sample3" name="product_qty" required>
                            <label class="mdl-textfield__label" for="sample3">Enter the product quantity...</label>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                    <span class="text-center">Product Image</span>
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="file" id="sample3" name="product_image" required>
                            <label class="mdl-textfield__label" for="sample3"></label>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center">
                    <span class="text-center">Unique Product Code</span>
                        <div class=" mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                            <input class="mdl-textfield__input" type="text" id="sample3" name="product_code" required>
                            <label class="mdl-textfield__label" for="sample3">Enter a valid unique product code.......</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                            <div class="row"><button class="btn btn-success" type="submit" value="submit" name="sellnow">sell now!</button></div>
                        </div>
                        <div class="col-4"></div>
                    </div>


                </form>
            </div>
            <div class="col-sm-4 col-md-3 col-lg-2"></div>
        </div>
    </div>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>