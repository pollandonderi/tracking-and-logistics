<?php

// use LDAP\Result;

include"configconnect.php";


if(isset($_POST["login"])){
    $useremail = $_POST["email"];
    $userpassword = $_POST["password"];

    $sql = "SELECT * FROM `users` WHERE emailadd = '$useremail'";
    $result = mysqli_query($link , $sql);

    if($result){
        $data = mysqli_num_rows($result);

        if($data == 1){
            while($rows=mysqli_fetch_array($result)){
                $id = $row["id"];
                $email = $row["emailadd"];
                $password = $row["password"];

                if(password_verify($userpassword , $password)){
                    header("location:dashboard.php");
                }
                else{
                    // echo"passwords do not match kindly change and try again.";
                    header("location:dashboard.php");
                }
            }

        }
        else{
            // echo"no such user was found";
            header("location:dashboard.php");
        }
    }
    else{
        echo"error executing $sql".mysqli_error($link);
    }

}




?>