<?php

include "../googleapi/google_api/vendor/autoload.php";

$gclient = new Google_Client();

$gclient -> setClientId( "1069928971711-ed8ondbt41qlkffjf7j44mtneopofdnc.apps.googleusercontent.com" );
$gclient -> setClientSecret( "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" );
$gclient -> setApplicationName( "logitrack" );
$gclient -> setRedirectUri( "http://localhost/logitrack/php/dashboard.php" );
$gclient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email"); 

$login_url = $gclient -> createAuthUrl();










?>