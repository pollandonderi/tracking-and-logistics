<?php

include "configconnect.php";

if(isset($_POST["connectclients"])){
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $weight = $_POST['weight'];
    $space= $_POST['space'];
    $description = $_POST['description'];


    $picture = $_FILES['picture']['name'];
    $tempname = $_FILES['picture']['tmp_name'];
    $folder = "../images".$picture;



    $date = $_POST['date'];


    $sql = "INSERT INTO `connectclients`(`fullname`, `email`, `weight`, `space`, `description`, `photo`, `date`) VALUES ('$fullname','$email','$weight','$space','$description','$picture','$date') ";

    $result = mysqli_query($link , $sql);

    if(move_uploaded_file($tempname , $folder)){
        echo "<p class='alert alert-primary'> Image uploaded succesfully </p>";
    }
    else{
        echo "<p class='alert alert-primary'> Image uploaded succesfully </p>";
    }

if($result){
    echo "<div class='alert alert-success' role='alert'>
    Records uploaded succesfully!
  </div>";
}
else{
    echo "error executing this query $sql".mysqli_error($link);
}

}






?>