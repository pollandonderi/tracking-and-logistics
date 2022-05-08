<?php

include "google-api/vendor/autoload.php";

$gclient = new Google_Client();

$gclient -> setClientId( "1069928971711-ed8ondbt41qlkffjf7j44mtneopofdnc.apps.googleusercontent.com" );
$gclient -> setClientSecret( "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" );
$gclient -> setApplicationName( "logistrack" );
$gclient -> setRedirectUri( "http://localhost/logitrack/php/dashboard.php" );
$gClient ->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$login_url = $gClient -> createAuthUrl();









?>