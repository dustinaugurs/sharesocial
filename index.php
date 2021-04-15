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
// use Facebook\Facebook;
// use Facebook\Exceptions\FacebookResponseException;
// use Facebook\Exceptions\FacebookSDKException;  

// $fb = new \Facebook\Facebook([
//   'app_id' => '289392449437643',           //Replace {your-app-id} with your app ID
//   'app_secret' => '187f8f26780059e8af7113d9f9943933',   //Replace {your-app-secret} with your app secret
//   'graph_api_version' => 'v10.0',  
//   //5acd44e35595746c4ccbfa103fd1a30a
// ]);

// $_SESSION['token']  = 'EAAEHM24mP8sBADw9B2YFKHe8g1OuN78eNJcw6x6FuAJqPX9w2rgiFQc2Xsql7CbIoXiSRqJiUyIEfEbmf4fQe56sB73QCSaibCjL0UvuxEMbNT6cSZB3TZCxg0zJmRFLAvFR3ptkZBlZC8ZA5JvSZAiLj0GSUJKj1BeKWFMvCzMS5nW2dqWcJ2CzZBky7WjznZBuXCB8Hn8qHAkMIUZAZAHV3KkVvZADrMWrZCcYSsfKXWXNGfRw8wTFwZCbta9gKdrSyHvEZD';
// $access_token = $_SESSION['token']; 

// try {
//   // Returns a `FacebookFacebookResponse` object
//   $response = $fb->get(
//     '/102833181943086?fields=id,name',
//     $access_token
//   );
// } catch(FacebookExceptionsFacebookResponseException $e) {
//   echo 'Graph returned an error: ' . $e->getMessage();
//   exit;
// } catch(FacebookExceptionsFacebookSDKException $e) {
//   echo 'Facebook SDK returned an error: ' . $e->getMessage();
//   exit;
// }
// $graphNode = $response->getGraphNode();
// echo $graphNode['name'];
// $name = $graphNode['name'];
?>

<a id="facebook-Link3"
    href="http://www.facebook.com/sharer.php?
    u=https://upswingpoker.com/hand/?pokeit=492oIT1M
    &p[url]=ssxx
    &p[images][0]=imgae
    &p[title]=title
    &p[summary]=summary" 
    target="_blank">old share on facebook</a>
<br>

<a id="facebook-Link"
    href="https://www.facebook.com/sharer/sharer.php" 
    target="_blank">share on Facebook</a>
<br>

<a id="twitter-Link"
    href="https://twitter.com/intent/tweet" 
    target="_blank">share on Twitter</a>
<br>

   

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>


$(document).ready(function(){
  const leftside = Math.floor($(window).width()/3);
  const topside = Math.floor($(window).height()/12);
  //const shareURL = 'https://upswingpoker.com/hand/?pokeit=492oIT1M';
  const shareURL = 'https://a2zprojecthub.com/';
  const summary = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type book.";
  //--------twitter---------------
  //alert(twitter_url);
  $('#twitter-Link').click(function () {
    var twitter_href = $('#twitter-Link').attr('href');
    var twitter_url = twitter_href+'?url='+shareURL+'&via=getboldify'+'&text='+summary;
      window.open(twitter_url, 'TwitterWindow', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600,top='+topside+', left='+leftside+', ');
      return false;
  });

  //--------facebook---------------
  $('#facebook-Link').click(function () {
    var facebook_href = $('#facebook-Link').attr('href');
    var facebook_url = facebook_href+'?u='+shareURL+'&t='+summary;
    //alert(width);
       window.open(facebook_url, 'share', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600,top='+topside+', left='+leftside+', ');
       return false;
  });
  //-------------------
});
</script>

</body>
</html>