<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'DMGgr8q0ZrU5kFr5j3FnhEWvJr8KoPGWh3Rxgj');
define('DB_NAME', 'evaluacion360');
define('DB_USER_TBL', 'alumno');

// Google API configuration
define('GOOGLE_CLIENT_ID', '234293452155-vtvl8l24gbj4a9q6mnk6v9tce3dfpcdo.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', 'a0AofVqN-536U40PZqairec1');
define('GOOGLE_REDIRECT_URL', 'http://evaluacion360.cristorey.edu.ec/login');

// Start session
if(!session_id()){
    session_start();
}

// Include Google API client library
require_once 'google-api-php-client/Google_Client.php';
require_once 'google-api-php-client/contrib/Google_Oauth2Service.php';

// Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('evaluacion360');
$gClient->setClientId(GOOGLE_CLIENT_ID);
$gClient->setClientSecret(GOOGLE_CLIENT_SECRET);
$gClient->setRedirectUri(GOOGLE_REDIRECT_URL);

$google_oauthV2 = new Google_Oauth2Service($gClient);