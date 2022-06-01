<?php



session_start();
if( ! isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !==true){
    header("location:index.php");
    exit();
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link rel="stylesheet" href="../css/form.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<div class="row client pt-2">
            <div class="text-center text-light">
                <h3>Register Today!</h3>
            </div>
           
            <div class="col-lg-6 col-sm-12 form container">
                <form class="form-body" action="handle_register.php" method="post">
                    
                    <input type="text" name="yourname" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name text-light">Your Name *</span>
                    </label>
                    <input type="text" name="phonenumber" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name text-light">Your Phone Number *</span>
                    </label>
                    <input type="text" name="company" autocomplete="off" >
                    <label for="name" class="label-name">
                        <span class="content-name text-light">Company</span>
                    </label>
                    <input type="text" name="emailadd" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name text-light">Your Email Adress *</span>
                    </label>
                    <input type="password" name="password" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name text-light">password</span>
                    </label>
                    <input type="password" name="confirmpassword" autocomplete="off" required>
                    <label for="name" class="label-name">
                        <span class="content-name text-light">Confirm Password</span>
                    </label>
                    <div class="text-center text-light mt-3 mb-5">
                        <!-- <input type="submit" name="register" class="btn btn-light bg-light" value="Register Now!"> -->
                        <button name="register" type="submit" class="btn btn-light " >Register Now</button>
                    </div>
                    
                    
                </form>
            </div>
            



            <div class="mt-5">

            </div>
        </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>