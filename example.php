<?php
// base class we need to extend
require_once("twitter-api-php/TwitterAPIExchange.php"); 
// class that extends this class
require_once("TWERP.php"); 

// you will need to provide your credentials, get them by creating an app at dev.twitter.com. 
require_once("credentials.php");  

$settings = array(
    'oauth_access_token' => $oauth_access_token,
    'oauth_access_token_secret' => $oauth_access_token_secret,
    'consumer_key' => $consumer_key,
    'consumer_secret' => $consumer_secret
);


$twitter = new TWERP($settings);

// this will use your credentials to determine if you have access to my top 20 tweets. 
echo $twitter->getStatuses("natedsaint"); 

// OR if you want to limit to the top 5
$options = array("count"=>5);
echo $twitter->getStatuses("natedsaint",$options);

?>

