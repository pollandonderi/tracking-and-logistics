<?php

$conn = new mysqli("localhost" , "root" , "" , "logitrack");
if($conn -> connect_error){
    die("connection failed!" .$conn -> connect_error);
}

?>
