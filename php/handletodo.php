<?php

include "configconnect.php";

if(isset($_POST["todolist"])){
    $what = $_POST["what"];
    $who = $_POST["who"];
    $time = $_POST["time"];
    $date = date('Y-m-d', strtotime($_POST['date']));
    $additional = $_POST["additional"];


    $sql = "INSERT INTO `todolist`(`what`, `who`, `date`, `time`, `additional`) VALUES ('$what','$who','$time','$date','$additional')";

    $result = mysqli_query($link , $sql);

    if($result){
        echo "your to do list is uploaded succesfully";
        header("location:completetask.php");
    }
    else{
        echo "error uploading your to do list $sql".mysqli_error($link);
    }
}