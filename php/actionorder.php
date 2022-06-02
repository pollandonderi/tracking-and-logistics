<?php
 require "configconnect2.php";

if(isset($_POST['pid'])){
    $pid = $_POST['pid'];
    $pname = $_POST['pname'];
    $pprice = $_POST['pprice'];
    $pimage = $_POST['pid'];
    $pcode = $_POST['pcode'];
    $quantity = 1;

    $stmt = $conn->prepare("SELECT product_code FROM cart WHERE product_code=?");
    $stmt->bind_param('s', $pcode);
    $stmt->execute();
    $res = $stmt -> get_result();
    $r = $res -> fetch_assoc();
    $code= $r['product_code'];

    if(!$code){
        $query = $conn ->prepare("INSERT INTO `cart`(`product_name`, `produce_price`, `product_image`, `quantity`, `total_price`, `product_code`) VALUES (?,?,?,?,?,?)");
        $query->bind_param('sssiss' , $pname , $pprice , $pimage , $pquantity , $pprice , $pcode);
        $query->execute();
        echo '<div class="alert alert-success" role="alert">
        Product succesfully added to cart!
      </div>';
    }
    else{
        echo '
        <div class="alert alert-danger" role="alert">
  item already in the cart!
</div>';

    }
    
}
