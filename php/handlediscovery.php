<?php

include "configconnect.php";
if(isset($_POST["submitmessage"])){
    $your_name = $_POST["your_name"];
    $phone_number = $_POST["phone_number"];
    $your_email = $_POST["your_email"];
    $company_ = $_POST["company_"];

    $sql = "INSERT INTO `discovery`(`your_name`, `phone_number`, `your_email`, `company_`) VALUES ('$your_name','$phone_number','$your_email','$company_')";

    $result = mysqli_query( $link , $sql);
    if($result){
        echo '<script type="text/Javascript">';
        echo 'alert("Message has been received succesfully look out for an email from our team within the next 2 minutes!")';
        echo '</script>';

        // header("location:index.php");

    }
    else{
        echo"error connecting to database $sql".mysqli_error($link);
    }
}



?>