<?php
include "cartconfig.php";

if(isset($_POST["sellnow"])){
    $product_name = $_POST["product_name"];
    $product_price = $_POST["product_price"];
    $product_qty = $_POST["product_qty"];
    $product_image = $_POST["product_image"];
    $product_code = $_POST["product_code"];

    $sql = "INSERT INTO `product`(`product_name`, `product_price`, `product_qty`, `product_image`, `product_code`) VALUES ('$product_name','$product_price','$product_qty','$product_image','$product_code')";

    $result = mysqli_query($conn , $sql);

    if($result){
        echo " data inserted succesfully";

    }
    else{
        echo"data not inserted $sql".mysqli_error( $conn);
    }


}

?>