<?php
ini_set('display_errors', 1);
require_once('TwitterAPIExchange.php');

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "799879958541705216-sBmlwoOkegABdZZzACCAUAfRljYEJkj",
    'oauth_access_token_secret' => "aN4RVUuxSjJpGY4HDcaYLRUagayXwdi86RiwYivkXmyql",
    'consumer_key' => "EvgIFh9Os6QbOPv2ruJ0NV6tR",
    'consumer_secret' => "FM4toKLSI0qCC0Pd1a2pf51ssrQR7NxJ2zGPKeC5Ganb85NCbe"
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=mohsincoderkub1';
$requestMethod = 'GET';
$twitter = new TwitterAPIExchange($settings);
$twee = $twitter->setGetfield($getfield)
             ->buildOauth($url, $requestMethod)
             ->performRequest();
$twitter_feeds = json_decode($twee);   
$twitt_feeds = array();
$j = 0;
foreach($twitter_feeds as $key => $twitter_feed) {
    if($twitter_feed->in_reply_to_status_id == '' && $j <= 4) {
        $twitt_feeds[] = $twitter_feed;
        $j++;
    }
}      