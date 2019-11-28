<?php

session_start();
require "./../../vendor/autoload.php";

/* 
Facebook API login Setup 
Get your API ID and APP SECRET KEY from Facebook Developers Page
*/
$FB = new \Facebook\Facebook([
 'app_id' => '378095093012345',
 'app_secret'=> '229db002854cca6d04d0ea8e9aff234',
 'default_graph_version' => 'v3.3'
]);


?>
