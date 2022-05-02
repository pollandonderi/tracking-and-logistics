<?php

$link = mysqli_connect("localhost" , "root" ,"" , "logitrack");

if($link == false){
    echo"Error connecting to server". mysqli_connect_error($link);
}







?>