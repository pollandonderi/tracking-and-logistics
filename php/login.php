<?php

// include "nav.php";
include " handle_glogin.php";



?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="../css/login.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="bg">
<div class="container-fluid">
  <div class="row ">
  <div class="col-sm-4 col-md-4 col-lg-4"></div>
  <div class="col-sm-4 col-md-4 col-lg-14">
    <!-- form begins here -->
    <form action="handle_login.php" method="post" class="form_container">
  <div class="mb-3">
    <h4 class="text-center text-light">login now!</h4>
    <label for="exampleInputEmail1" class="form-label text-light">Email address</label>
    <input name="emailAdd" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
    <div id="emailHelp" class="form-text text-light">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label text-light">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label text-light" for="exampleCheck1">Remember me</label>
  </div>
  <button type="submit" class="btn btn-dark btn-block d-grid gap-2 mx-auto" name="login">Submit</button>
  <p class="text-light">or login with</p>
  <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-facebook-f bg-white">facebook</i>
              </button>

              <button type="button" value="submit"  href="handle_glogin.php" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-google bg-white">google</i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-twitter bg-white"> twitter</i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fa fa-github bg-white">github</i>
              </button>
              <a href="register.php" class="text-light">Not yet registered? Register now</a><br>
              <a href="terms of service.php" class="text-light">terms and conditions apply</a>
</form>



    <!-- form ends here -->
  </div>
  <div class="col-sm-4 col-md-4 col-lg-4"></div>
</div>
</div>
  </div>
</div>
</div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>