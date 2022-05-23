<?php


session_start();
if (!isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !== true) {
    header("location:index.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
    <div class="container-fluid">

        <footer class="w-100 py-4 flex-shrink-0 bg-dark">
            <div class="container py-4">
                <div class="row gy-4 gx-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="h1 text-white">LogiTrack</h5>
                        <p class="small text-muted">community</p>
                        <p class="small text-muted mb-0">&copy; polland. All rights reserved. 2022 <a class="text-primary" href="#">pollandsabisa@gmail.com</a></p>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">navigation</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="index.php">Home</a></li>
                            <li><a href="">Who We Are</a></li>
                            <li><a href="#">Services</a></li>
                            <li><a href="#">Contact Us</a></li>
                            <li><a href="#">Membership</a></li>
                            <li><a href="#">Support</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-3">Quick links</h5>
                        <ul class="list-unstyled text-muted">
                            <li><a href="login.php">Register For Free</a></li>
                            <li><a href="#">Ship Your Product</a></li>
                            <li><a href="#">Track Product</a></li>
                            <li><a href="contactus.php">Customer Support</a></li>
                            <li><a href="#">Connect with producers</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-white p-2 m-3">Connect with us</h5>
                        <div class="d-flex justify-content-center social-buttons">
                            <button type="button" class="btn btn-secondary btn-round m-3" data-toggle="tooltip" data-placement="top" title="Twitter">
                                <i class="fab fa-twitter p-2"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round m-3" data-toggle="tooltip" data-placement="top" title="Facebook">
                                <i class="fab fa-facebook p-2"></i>
                            </button>
                            <button type="button" class="btn btn-secondary btn-round m-3" data-toggle="tooltip" data-placement="top" title="Linkedin">
                                <i class="fab fa-linkedin p-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
        </footer>

    </div>

</body>

</html>