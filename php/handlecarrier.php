<?php
include "header2.php";

include "configconnect.php";

if (isset($_POST["carrier"])){

    $carrier = $_POST["carrier_name"];
    $product = $_POST["product-choice"];
    $product_qty = $_POST["product_qty"];
    $phone = $_POST["phone-number"];
    $residence = $_POST["residence"];
    $route = $_POST["route"];
     
    $sql = "INSERT INTO `carrier`(`carrier`, `product`, `product_qty`, `phone`, `residence`, `route`) VALUES ('$carrier','$product','$product_qty','$phone','$residence','$route')";
     
    $result = mysqli_query($link , $sql);

    if($result){
        echo "records ulploaded succesfully";
        echo "You are now a carrier and you are legible for transport of packages.";
    }
    else{
        echo "records not uploaded to the database $sql".mysqli_error($link);
    }

}




?>