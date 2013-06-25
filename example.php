<?php

require_once("twitter-api-php/TwitterAPIExchange.php"); // base class we need to extend

require_once("TWERP.php"); // class that extends this class

require_once("credentials.php");  // you will need to provide your credentials, get them by creating an app at dev.twitter.com. 

$settings = array(
    'oauth_access_token' => $oauth_access_token,
    'oauth_access_token_secret' => $oauth_access_token_secret,
    'consumer_key' => $consumer_key,
    'consumer_secret' => $consumer_secret
);


$twitter = new TWERP($settings);

echo $twitter->getStatuses("natedsaint"); # this will use your credentials to determine if you have access to my top 20 tweets. 


?>

