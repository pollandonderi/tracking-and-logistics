<?php

session_start();
if( ! isset($_SESSION["loggedin"]) or $_SESSION["loggedin"] !==true){
    header("location:index.php");
    exit();
}
include "header2.php";




















?>