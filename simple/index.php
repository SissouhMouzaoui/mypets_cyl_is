<?php

require_once('include/OAuth.php');
require_once('include/TwitterAPIExchange.php');
require_once('include/twitteroauth.php');

$settings  = array(
    'oauth_access_token' => "74141355-DaglXHwtxAr9EoleJaQuUXtnORlPKGB9egjoGgIl5",
    'oauth_access_token_secret' => "PwFdpqvdmdycITw07Finjul37sGpbkgpcMXEYLMtFXEnG",
    'consumer_key' => "VDYqfJ11Nn5C01BH8FcpvmFky",
    'consumer_secret' => "r0xiJhRWZgUVMCAL2gw3uQ0Azl0lDufDis2juBnu3p5zIBtjqp",
 );

$requestMethod = 'Get';

$url= 'https://api.twitter.com/1.1/statuses/user_timeline.json';

$getfield = '?screen_name=venkymudaliar&count=10';

$twitter = new TwitterAPIExchange($settings);
$response = $twitter -> setGetfield($getfield)
                     -> buildOauth($url,$requestMethod)
                     -> performRequest();

echo "$response";                     
 
?>