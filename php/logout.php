<?php
session_start();


$_SESSION = array();


session_destroy();


header("location:index.php");


exit();


session_start();
if( ! isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !==true){
    header("location:index.php");
    exit();
}


?>