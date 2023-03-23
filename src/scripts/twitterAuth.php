<?php

session_start();

require "vendor/autoload.php";

use Abraham\TwitterOAuth\TwitterOAuth;


$search = "@movistar_es";
$twitteruser = "@andydaking";
$notweets = 30;
$consumerkey = "xShQ1Z5996WF4ZEQcUEATQrsv";
$consumersecret = "ge5ZQKSuXTaJ4NwHL7WWhSxrkzAdh34pXv13M8W7E0bNkvbyKy";
$accesstoken = "123662346-B4ssh6M8xOwSTn6QkUhsdvZFbyOVkjkNodHEplCk";
$accesstokensecret = "iQokw1TRIcwAtSkQkpD9HRRFIquDMwwSCca9JrmaoXvQ3";

$connection = new TwitterOAuth($consumerkey, $consumersecret, $accesstoken, $accesstokensecret);

//$content = $connection->get("account/verify_credentials");
//$content = $connection->get("statuses/user_timeline.json?screen_name=".$twitteruser."&count=".$notweets);

//$content = $connection->get("/statuses/user_timeline");
$content = $connection->get("/search/tweets", ["q" => "to:movistar_es"]);


echo json_encode($content);
?>