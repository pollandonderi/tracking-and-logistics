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
  <link rel="stylesheet" href="../css/header2.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <meta name='viewport' content='width=device-width, initial-scale=1'>




</head>

<body>
  <div class="container-fluid">
    <div class="row ">
      <div class="col-sm-3 col-lg-3 dark">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="fa fa-tachometer fa-2x" style="font-size:24px;"></i>
              <span>
                <h4>Logitrack Dashboard</h4>
              </span>
            </a>
            <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="cartindex.php">
              <i class="fa fa-shopping-cart me-2" style="font-size:24px;"></i>
              <span>Order Placement</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fa fa-line-chart me-2" style="font-size:24px;"></i>
              <span>shipping Status</span>
            </a>
            <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="map.php">
              <i class="fa fa-map-marker me-2" style="font-size:24px;"></i>
              <span>Tracking</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="#">
              <i class="fa fa-paperclip me-2" style="font-size:24px;"></i>
              <span>Reports</span>
            </a>
            <hr>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="connect.php">
              <i class="fa fa-group me-2" style="font-size:24px;"></i>
              <span>connect</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="searchconnect.php">
              <i class="fa fa-search-plus me-2" style="font-size:24px;"></i>
              <span> Search for a connection</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="customersupport.php">
              <i class="material-icons me-2" style="font-size:24px">phone_in_talk</i>
              <span>Customer Support</span>
            </a>
            <hr>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link " href="frequent.php">
              <i class="fa fa-question me-2" style="font-size:24px;"></i>
              <span>FAQs</span>
            </a>
          </li>
          <li class="nav-item p-2">
            <a class="nav-link " href="#">
              <i class="fa fa-gears me-2" style="font-size:24px;"></i>
              <span>Darkmode</span>
              <img src="../images/darktheme.png" alt="loading" id="icon">
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
        <div class="row p-1">
          <div class="col-sm-7 col-lg-7">
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-dark" type="submit"><i class="fa fa-search" style="font-size:24px"></i></button>
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
                  <img src=" <?php echo "<img src='" . $_SESSION['picture'] . "'>";  ?>" alt="Loading" height="40" width="40" class="rounded circle">
                </a>
              </li>
            </ul>
          </div>

        </div>
        <div class="row p-4">

          <div class="col-sm-4 col-lg-4 ">
            <div class="card h-100 ">
              <div class="card-title blue1 text-center link11">TO DO LIST</div>
              <div class="card-body blue1">
                <div class="row m-2">
                <a href="todolist.php" class="btn btn-primary ">write it down to remember<i class="fa fa-edit m-1" style="font-size:26px"></i></a>
                </div>

              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4 ">
            <div class="card h-100">
              <div class="card-title yellow1 text-warning text-center link22">BECOME A SELLER</div>
              <div class="card-body yellow1">
                <div class="row m-2">
                  <button type="button" class="btn btn-warning" href="#">sell on our platform<i class="fa fa-handshake-o m-1" style="font-size:26px"></i></button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-4 col-lg-4">
            <div class="card h-100">
              <div class="card-title green1 text-center text-success">VIEW TO DO LIST</div>
              <div class="card-body green1">
                <div class="row m-2">
                  <button type="button" class="btn btn-success" href="#">view complete tasks<i class="fa fa-check-square-o m-1" style="font-size:26px"></i></button>
                </div>
                <div class="row m-2">
                  <button type="button" class="btn btn-success" href="#">view uncompleted tasks<i class="fa fa-clock-o p-1" style="font-size:26px"></i></button>
                </div>


              </div>
            </div>
          </div>

        </div>
        <div class="row ">
          <div class="col-sm-6 col-lg-5">
          <div class="card" style="width: 100;">
          <div class="card-header text-center">REMINDERS</div>
          <div class="row d-flex justify-content-center">
          
          <lottie-player src="https://assets10.lottiefiles.com/private_files/lf30_oikmoh7v.json"  background="transparent"  speed="1"  style="width: 300px; height: 300px;"  loop  autoplay></lottie-player>
          </div>
          
          <div class="card-body text-center reminder bg-light" style="">
    <h5 class="card-title text-dark ">Set a reminder</h5><hr>
    <a href="reminder.php" class="btn btn-primary ">set reminder</a>
  </div>
</div>
          </div>
          <div class="col-sm-8 col-lg-7">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
              </div>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="../images/kettle.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>picture of goods</h5>
                    <p>Some we have  apicture of some of the goods too be bought</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../images/electronics3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Sample of electronics sold</h5>
                    <p>cheap electronics</p>
                  </div>
                </div>
                <div class="carousel-item">
                  <img src="../images/foundation.jpg" class="d-block w-100 " alt="...">
                  <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                  </div>
                </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>


        </div>


      </div>
    </div>
  </div>




  <script>
    var icon = document.getElementById("icon");
    icon.onclick = function() {
      document.body.classList.toggle("dark-theme");
      if (document.body.classList.contains("dark-theme")) {
        icon.src = "../images/lighttheme.png";
      } else {
        icon.src = "../images/darktheme.png";
      }
    }
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
</body>

</html>