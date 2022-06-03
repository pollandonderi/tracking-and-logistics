<?php

// require_once "component.php";

//start session
// session_start();
// if (isset($_POST['add'])) {
// }

session_start();
if( ! isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !==true){
    header("location:index.php");
    exit();
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js">
    </script>
    <script src="https://kit.fontawesome.com/84ae9dfdbc.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
</head>

<body>
   
    <div class="container-fluid">

        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
            <!-- Brand -->
            <a class="navbar-brand" href="order.php"><i class="fa fa-barcode"></i>&nbsp;logitrack</a>

            <!-- Toggler/collapsibe Button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar links -->
            <div class="collapse navbar-collapse " id="collapsibleNavbar">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="order.php">products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="order.php">categories</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="checkout.php">checkout</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart">
                                <span id=" cart-item" class="badge badge-light text-dark">3</span>
                            </i></a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="row">
            <div id="message"></div>
        </div>
        <div class="row">
            <?php
            include "configconnect2.php";
            $stmt=$conn->prepare("SELECT * FROM `product`");
            $stmt->execute();
            $result=$stmt->get_result();
            while($row=$result->fetch_assoc()):

            ?>
            <div class="col-sm-6 col-md-4 col-lg-3 ">
                <div class="card-deck">
                    <div class="card p-2 border-secondary">
                        <img src="<?= $row['product_image'] ?>" class="card-img-top" height="250">
                        <div class="card-body p-1">
                            <h4 class="text-center card-title"><?= $row['product_name']?></h4>
                            <h5 class="text-center">price: <?=number_format($row['product_price'],2)?> ksh/-</h5>
                        </div>
                        <div class="card-footer p-1">
                            <form action="" class="form-submit">
                                <input type="hidden" class="pid" value="<?= $row['id'] ?>">
                                <input type="hidden" class="pname" value="<?= $row['product_name'] ?>">
                                <input type="hidden" class="pprice" value="<?= $row['product_price'] ?>">
                                <input type="hidden" class="pimage" value="<?= $row['product_image'] ?>">
                                <input type="hidden" class="pcode" value="<?= $row['product_code'] ?>">
                                <button class="btn btn-info btn-dark btn-block addItemBtn">add to cart <i class="fas fa-shopping-cart"></i></button>
                            </form>
                           
                        </div>
                    </div>
                </div>
            </div>
            <?php
            endwhile;
            ?>
        </div>

    </div>
<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script type="text/Javascript">
        $(document).ready(function(){
            $(".addItemBtn").click(function(e){
                e.preventDefault();
                var $form = $(this).closest(".form-submit");
                var pid = $form.find(".pid").val();
                var pname = $form.find(".pname").val();
                var pprice = $form.find(".pprice").val();
                var pimage = $form.find(".pimage").val();
                var pcode = $form.find(".pcode").val();
                $.ajax({
                    url:'actionorder.php',
                    method:'post',
                    data: {pid:pid, pname:pname, pprice:pprice, pimage:pimage, pcode:pcode},

                    success: function response{
                        $("#message").html(response);

                    }

                });
            });
        });
        
    </script>
</body>

</html>