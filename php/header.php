
<?php

// include "handle_glogin.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <meta name='viewport' content='width=device-width, initial-scale=1'>




</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-3 col-lg-3 bg-dark">
      <ul class="nav flex-column">
     <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="#">
     <i class="fa fa-tachometer fa-2x" style="font-size:24px;"></i>
     <span><h4>Logitrack Dashboard</h4></span>
     </a><hr>
     </li>
     <li class="nav-item">
     <a class="nav-link" href="#">
     <i class="fa fa-shopping-cart me-2" style="font-size:24px;"></i>
     <span>Order Placement</span>
     </a>
     </li>
     <li class="nav-item">
    <a class="nav-link" href="#">
    <i class="fa fa-line-chart me-2" style="font-size:24px;"></i>
    <span>shipping Status</span>
    </a><hr>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">
    <i class="fa fa-map-marker me-2" style="font-size:24px;"></i>
    <span>Tracking</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">
    <i class="fa fa-paperclip me-2" style="font-size:24px;"></i>
    <span>Reports</span>
    </a><hr>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="#">
    <i class="fa fa-group me-2" style="font-size:24px;"></i>
    <span>connect</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="customersupport.php">
    <i class="material-icons me-2" style="font-size:24px">phone_in_talk</i>
    <span>Customer Support</span>
    </a><hr>
  </li>
  <li class="nav-item p-2">
    <a class="nav-link " href="#">
    <i class="fa fa-question me-2" style="font-size:24px;"></i>
    <span>FAQs</span>
    </a>
  </li>
  <li class="nav-item p-2">
    <a class="nav-link " href="#">
    <i class="fa fa-gears me-2" style="font-size:24px;"></i>
    <span>Settings</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link " href="logout.php">
    <i class="fa fa-mail-forward me-2" style="font-size:24px;"></i>
    <span>logout</span>
    </a>
  </li>
</ul>
      </div>

      <div class="col-sm-9 col-lg-9 bg-light">
    <div class="row">
      <div class="col-sm-7 col-lg-7">
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-dark" type="submit">Search</button>
      </form>
        
      </div>
      <div class="col-sm-5 col-lg-5">
        <!-- image here  -->
        <ul class="nav justify-content-end">
        <li class="nav-item">
         <a class="nav-link" href="#">
       <span><?php echo $_SESSION["firstname"];  ?></span>
        </a>
         </li>
        <li class="nav-item">
       <a class="nav-link" href="#">
       <img src=" <?php echo "<img src='".$_SESSION['picture']."'>";  ?>" alt="Loading" height="40" width="40" class="rounded circle">
       </a>
       </li>
        </ul>
      </div>

    </div>
  </div>
  <div

    </div>
    
  </div>
  
  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>