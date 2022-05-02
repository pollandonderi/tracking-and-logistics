<?php
// include "nav.php";




?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>conact us today</title>
        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel="stylesheet" href="../css/contactus.css">
            <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body class="bg-dark">
        <div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-md-7 col-sm-9">
           
            <h3 class="text-white float-left m-3">Hello, lets get in touch</h3>
               <form>
               <div>
                    <label for="name" class="form-label text-white m-3">Your Name</label><br>
                    <input type="text" name="yourname" class=" m-1 input"  required>
               </div>
               <div>
                    <label for="name" class="form-label text-white m-3">Email address</label><br>
                    <input type="text" name="emailadress" class=" input m-1"  required>
               </div>
               <div>
                    <label for="name" class="form-label text-white m-3">Phone Number</label><br>
                    <input type="text" name="phonenumber" class="input m-1"  required>
               </div>
               <div>
                    <label for="name" class="form-label text-white m-3">Message</label><br>
                    <textarea type="text" name="message" class="input m-2" required></textarea>
               </div>
               <button class="btn btn-light m-3" href="#">submit</button>
                        
               </form>

        </div>

       
        <div class="col-lg-4 col-sm-9 d-flex align-items-center ">
        <div class="card" style="width: 23rem;">
    <div class="card-body ">
      <div class="card-title m-3"><h5><b>Talk to us</b></h5></div>
      <div class="card-text m-3"><p>+254 95836437</p></div>
      <div class="card-text m-3"><a href="#">pollandsabisa@gmail.com</a></div>
      
      <div class="card-title-visit m-3 "><h5><b>Visit us</b></h5></div>
      <div class="card-text m-3"><p>The Naimmu building, 5th floor-suite 2</p></div>
      <div class="card-text m-3"><p>Multimedia</p></div>

      <i class="fa fa-facebook-square m-2 p-2" style="font-size:36px"></i>
      <i class="fa fa-twitter-square m-2 p-2" style="font-size:36px"></i>
      <i class="fa fa-linkedin-square m-2 p-2" style="font-size:36px"></i>
    </div>
</div>
        </div>
    </div> 
        </div>  
    </body>

</html>