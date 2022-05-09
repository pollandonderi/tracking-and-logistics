<?php

include "../googleapi/google_api/vendor/autoload.php";

$gclient = new Google_Client();

$gclient -> setClientId( "1069928971711-ed8ondbt41qlkffjf7j44mtneopofdnc.apps.googleusercontent.com" );
$gclient -> setClientSecret( "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" );
$gclient -> setApplicationName( "logitrack" );
$gclient -> setRedirectUri( "http://localhost/logitrack/php/dashboard.php" );
$gclient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"); 

$login_url = $gclient -> createAuthUrl();


if (isset($_GET["code"])){

    $gtoken = $gclient ->fetchAccessTokenWithAuthCode($_GET["code"]);

    if(!isset($gtoken["error"])){

        $gclient -> setAccessToken($gtoken["access_token"]);

        $_SESSION["access_token"] = $gtoken["access_token"];

        $gService = new  Google\Service\Oauth2($gclient);

        $data = $gService ->userinfo -> get();

        if(!empty($data["given_name"])){
            $firstname = $data["given_name"];
            $_SESSION["firstname"] = $firstname;
            
        }
        if(!empty($data["family_name"])){
            $secondname = $data["given_name"];
            $_SESSION["secondname"] = $secondname;

        }
        if(!empty($data["email"])){
            $email = $data["email"];
            $_SESSION["email"] = $email;

        }
        if(!empty($data["gender"])){
            $gender = $data["gender"];
            $_SESSION["gender"] = $gender;

        }
        if(!empty($data["picture"])){
            $picture = $data["picture"];
            $_SESSION["picture"] = $picture;

        }
    }
}






?>