<?php

require_once "config.php";

try{

	$accessToken = $helper->getAccessToken();

}catch( \Facebook\Exceptions\FacebookResponseException $e){

	echo "Response Exception :" .$e->getMessage();
	exit();
}catch( \Facebook\Exceptions\FacebookSDKException $e){

	echo  "SDK Exception: ". $e->getMessage();
	var_dump($helper->getError());
	exit();
}

if(!isset($accessToken)){
	header("Location: index.php");
	exit();
}

//echo '<h3>Access Token</h3>';
//var_dump($accessToken->getValue());

//Long time accessToken variable
$oAuth2Client = $FB->getOAuth2Client();

// Get the access token metadata from /debug_token
//$tokenMetadata = $oAuth2Client->debugToken($accessToken);
////echo '<h3>Metadata</h3>';
//var_dump($tokenMetadata);
//
//$tokenMetadata->validateAppId('378095093050017'); // Replace {app-id} with your app id
//// If you know the user ID this access token belongs to, you can validate it here
////$tokenMetadata->validateUserId('123');
//$tokenMetadata->validateExpiration();

//if(isset($_GET['state'])){
//$helper->getPersistentDataHandler()->set('state',$_GET['state']);
//}
//if(!$accessToken->isLongLived())
//
//
$accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
//
////get Details of User like Fb_id, name, email
  //$data ='/me?fields=id,name,email';
  //$response =$FB->get($data, $accessToken);
  //$userData = $response->getGraphUser()->asArray();

//print_r($userData);


//$_SESSION['userData'] = $userData;
//$_SESSION['fb_access_token'] = (string) $accessToken;

header("Location : hello.php");
exit();
?>