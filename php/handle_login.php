<?php
// use LDAP\Result;

include "configconnect.php";


if (isset($_POST["login"])) {
    $useremail = $_POST["emailAdd"];
    $userpassword = $_POST["password"];

    // echo $useremail;
    // echo $userpassword;
    $sql = "SELECT * FROM `users` WHERE emailadd = '$useremail'";
    $result = mysqli_query($link, $sql);

    if ($result) {
        $data = mysqli_num_rows($result);
        // echo $data; 
        if ($data != 0) {
            // echo 'more than';
            while ($row = mysqli_fetch_array($result)) {
                $id = $row["id"];
                $email = $row["emailadd"];
                $password = $row["password"];

                // echo '<br>';
                // echo $password;
                // echo '<br>';
                // echo md5($userpassword);
                // echo '<br>';

                if (md5($userpassword) == $password) {
                    // if(password_verify($userpassword , $password)){

                    session_start();
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $yourname;
                    $_SESSION["loggedin"] = true;

                    header("location:dashboard.php");
                } else {
                    // echo $userpassword;
                    // echo password_hash($password , PASSWORD_DEFAULT);
                    // echo"passwords do not match kindly change and try again.";
                    
                    echo '<script type ="text/JavaScript">';
                    echo 'alert(" passwords do not match kindly check and try again ")';
                    echo '</script>';
                    // header("location:dashboard.php");
                }
            }
        } else {
            echo "no such user was found";
            // header("location:dashboard.php");
        }
    } else {
        echo "error executing $sql" . mysqli_error($link);
    }
}
