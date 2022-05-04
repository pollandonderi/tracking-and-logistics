<?php
include "configconnect.php";

if(isset($_POST["register"])){

    $yourname = $_POST["yourname"];
    $phonenumber = $_POST["phonenumber"];
    $company = $_POST["company"];
    $emailadd = $_POST["emailadd"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];

    if(strlen($password)<6){
        $passerror = "your password must be more than six characters";
        echo "$passerror";

    }
    else{
        $storepass = password_hash($password, PASSWORD_DEFAULT);
    }
    if($password != $confirmpassword){
        $confirmpasserror = "passwords do not match";
        echo"$confirmpasserror";
    }
    if(empty($passerror) and empty($confirmpasserror)){
        $sql = "INSERT INTO `users`(`yourname`, `phonenumber`, `company`, `emailadd`, `password`) 
        VALUES ('$yourname','$phonenumber','$company','$emailadd','$storepass')";

        $result = mysqli_query($link , $sql);

        if($result){
            echo"you have been registered succesfuly";
            header("location:login.php");
        }
        else{
            echo"error executing query $sql".mysqli_error($link);
        }
    }
}





?>