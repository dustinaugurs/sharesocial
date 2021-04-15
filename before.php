

<!DOCTYPE html>
<html>
<head>
  <title>
    My Name 
  </title>
</head>

<body>
  <h1>Get My Name from Facebook</h1>

<?php

require_once __DIR__ . '/vendor/autoload.php';   

$fb = new \Facebook\Facebook([
  'app_id' => '289392449437643',
  'app_secret' => '187f8f26780059e8af7113d9f9943933',
  'default_graph_version' => 'v2.10',
]);


try {
   
// Get your UserNode object, replace {access-token} with your token
  $response = $fb->get('/me', '5acd44e35595746c4ccbfa103fd1a30a');

} catch(\Facebook\Exceptions\FacebookResponseException $e) {
        // Returns Graph API errors when they occur
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(\Facebook\Exceptions\FacebookSDKException $e) {
        // Returns SDK errors when validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}


$me = $response->getGraphUser();

       //All that is returned in the response
echo 'All the data returned from the Facebook server: ' . $me;

       //Print out my name
echo 'My name is ' . $me->getName();

?>

</body>
</html>