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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>


    <div class="container-fluid">
        <div class="row">
            <div class="text-center">
                <h3>Shop from the following categories</h3>
                <hr>
            </div>
        </div>
            <div class="text-center">
                <h3>Electronics</h3>
            </div>
        </div>

        <section class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/ketttle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Electric kettle</h5>
                            <p class="card-text"> Bruhm electric kettle</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/tv.jpg" height="170px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tvs</h5>
                            <p class="card-text">samsung 32" inch</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/theatre.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Home theatre</h5>
                            <p class="card-text">synix home theatre 500w</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/extension.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">electric extension</h5>
                            <p class="card-text">long cable 500m extensions</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-dark d-flex justify-content-end">
                <div class="col-6 bg-dark">
                    <a href="#" class=" d-flex justify-content-end text-white"> SEE ALL<i class="fa fa-share" style="font-size:24px"></i></a>
                </div>

            </div>
        </section>
            <div class="text-center">
                <h3>Electronics</h3>
            </div>
        </div>

        <section class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/ketttle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Electric kettle</h5>
                            <p class="card-text"> Bruhm electric kettle</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/tv.jpg" height="170px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tvs</h5>
                            <p class="card-text">samsung 32" inch</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/theatre.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Home theatre</h5>
                            <p class="card-text">synix home theatre 500w</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/extension.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">electric extension</h5>
                            <p class="card-text">long cable 500m extensions</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-dark d-flex justify-content-end">
                <div class="col-6 bg-dark">
                    <a href="#" class=" d-flex justify-content-end text-white"> SEE ALL<i class="fa fa-share" style="font-size:24px"></i></a>
                </div>

            </div>
        </section>
            <div class="text-center">
                <h3>Electronics</h3>
            </div>
        </div>

        <section class="container ">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/ketttle.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Electric kettle</h5>
                            <p class="card-text"> Bruhm electric kettle</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/tv.jpg" height="170px" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Tvs</h5>
                            <p class="card-text">samsung 32" inch</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/theatre.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Home theatre</h5>
                            <p class="card-text">synix home theatre 500w</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 ">
                    <div class="card">
                        <img src="../images/extension.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">electric extension</h5>
                            <p class="card-text">long cable 500m extensions</p>
                            <a href="#" class="btn btn-primary">ORDER NOW</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row bg-dark d-flex justify-content-end">
                <div class="col-6 bg-dark">
                    <a href="#" class=" d-flex justify-content-end text-white"> SEE ALL<i class="fa fa-share" style="font-size:24px"></i></a>
                </div>

            </div>
        </section>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>