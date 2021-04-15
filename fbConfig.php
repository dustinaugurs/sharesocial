<?php
if(!session_id()){
    session_start();
}

// Include the autoloader provided in the SDK
require_once __DIR__ . '/facebook-php-sdk/autoload.php';

// Include required libraries
use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

/*
 * Configuration and setup Facebook SDK
 */
$appId         = '289392449437643'; //Facebook App ID
$appSecret     = '187f8f26780059e8af7113d9f9943933'; //Facebook App Secret
$redirectURL   = 'http://localhost/sharesocial/'; //Callback URL
$fbPermissions = array('5acd44e35595746c4ccbfa103fd1a30a'); //Facebook permission

$fb = new Facebook(array(
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v2.6',
));

// Get redirect login helper
$helper = $fb->getRedirectLoginHelper();
//print_r($helper); die;

// Getting user's profile info from Facebook 
try { 
    $graphResponse = $fb->get('/me?fields=name,first_name,last_name,email,link,gender,picture'); 
    $fbUser = $graphResponse->getGraphUser(); 
} catch(FacebookResponseException $e) { 
    echo 'Graph returned an error: ' . $e->getMessage(); 
    session_destroy(); 
    // Redirect user back to app login page 
    header("Location: ./"); 
    exit; 
} catch(FacebookSDKException $e) { 
    echo 'Facebook SDK returned an error: ' . $e->getMessage(); 
    exit; 
} 
$_SESSION['facebook_access_token'] = '5acd44e35595746c4ccbfa103fd1a30a';
// Try to get access token
try {
    if(isset($_SESSION['facebook_access_token'])){
        $accessToken = $_SESSION['facebook_access_token'];
    }else{
        $accessToken = $helper->getAccessToken();
    }
} catch(FacebookResponseException $e) {
     echo 'Graph returned an error: ' . $e->getMessage();
      exit;
} catch(FacebookSDKException $e) {
    echo 'Facebook SDK returned an error: ' . $e->getMessage();
      exit;
}
?>