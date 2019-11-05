<?php

use Facebook\Facebook;
use Facebook\Exceptions\FacebookResponseException;
use Facebook\Exceptions\FacebookSDKException;

require_once 'php-graph-sdk/src/Facebook/autoload.php';
require_once 'php-graph-sdk/src/Facebook/Exceptions/FacebookResponseException.php';
require_once 'php-graph-sdk/src/Facebook/Exceptions/FacebookSDKException.php';
require_once 'php-graph-sdk/src/Facebook/Helpers/FacebookRedirectLoginHelper.php';
require_once '../twitter/TwitterAPIExchange.php';

/** Facebook Feed */
$appId = "2231620420240000";
$appSecret = "a5cb2652eefbad7d438b97e6ff66b974";
$fb = new Facebook([
    'app_id' => $appId,
    'app_secret' => $appSecret,
    'default_graph_version' => 'v3.1'
]);
$access_tkon = 'EAAftpZA5sAoABAMrAPo4CaGRmOjEN0sCnhJDmePwKKjTVFyzIApf9tAw9WJJnhRZCgGyKOTIIWHpooQ7lwioSOmAPG7SwlPKZAxjjvPqLUywC10HOU1FCBJP1uaLWgatPr5GEHpCL5NXpGK1R5eHRLwpYbMB4HFsiEwtiW3hQZDZD';


try {
    $response = $fb->get(
        '/2159142874301689/feed?fields=picture,created_time,message,id,actions&limit=5',
        $access_tkon
    );
} catch (FacebookResponseException $e) {
    // print_r($e->getMessage());
    // display error message
    // exit();
} catch (FacebookSDKException $e) {
    // print_r($e->getMessage());
    // display error message
    // exit();
}
$res = $response->getBody();
$obj = json_decode($res); 
/**  END Facebook Feed */

/**  Youtube Feed */
$channel_id = 'UC1cA4B72v5xv3i-RSEKnrTw'; // put the channel id here
$youtube = file_get_contents('https://www.youtube.com/feeds/videos.xml?channel_id='.$channel_id);
$xml = simplexml_load_string($youtube, "SimpleXMLElement", LIBXML_NOCDATA);
$json = json_encode($xml);
$youtube_feeds = json_decode($json, true);

/** END youtube Feed */

/** Twitter Feed */

/** Set access tokens here - see: https://dev.twitter.com/apps/ **/
$settings = array(
    'oauth_access_token' => "799879958541705216-sBmlwoOkegABdZZzACCAUAfRljYEJkj",
    'oauth_access_token_secret' => "aN4RVUuxSjJpGY4HDcaYLRUagayXwdi86RiwYivkXmyql",
    'consumer_key' => "EvgIFh9Os6QbOPv2ruJ0NV6tR",
    'consumer_secret' => "FM4toKLSI0qCC0Pd1a2pf51ssrQR7NxJ2zGPKeC5Ganb85NCbe"
);

$url = 'https://api.twitter.com/1.1/statuses/user_timeline.json';
$getfield = '?screen_name=AlbertaPayments';
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
/** END Twitter */
?>