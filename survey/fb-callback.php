<?php
session_start();
require_once __DIR__ . '/app-info.php'; // app information
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
    'app_id' => APPINFO[0]['id'],
    'app_secret' => APPINFO[0]['secret'],
    'default_graph_version' => APPINFO[0]['version'],
    'persistent_data_handler'=>'session',
    'user_managed_groups'=>'session',
]);
  $helper = $fb->getRedirectLoginHelper();
  $accessToken = $helper->getAccessToken();
  echo"<hr>".$accessToken; 
  echo "<hr><a href='http://localhost:8000/login.php'>back</a><hr>";


  //------------------------------------------------------- [user profile]
  $query_str ="me?fields=id,name,email,birthday,gender,location";
  // $query_str ="me/friends?limit=50";
  try {
    $response = $fb->get($query_str, $accessToken);
  } catch(Facebook\Exceptions\FacebookResponseException $e) {
    echo 'Graph returned an error: ' . $e->getMessage();
    exit;
  } catch(Facebook\Exceptions\FacebookSDKException $e) {
    echo 'Facebook ( user get info ) SDK returned an error: ' . $e->getMessage();
    exit;
  }
  
  $user = $response->getDecodedBody();
  echo json_encode($user, JSON_PRETTY_PRINT);
 
  // var_dump($user);


  //------------------------------------------------------- [group info]

  // $group_id = "444890275682342";
  // try {
  //   $response = $fb->get('/'.$group_id .'/members',  $accessToken);
  // } catch(Facebook\Exceptions\FacebookResponseException $e) {
  //   echo 'Graph returned an error: ' . $e->getMessage();
  //   exit;
  // } catch(Facebook\Exceptions\FacebookSDKException $e) {
  //   echo 'Facebook SDK returned an error: ' . $e->getMessage();
  //   exit;
  // }
  // $graphNode = $response->getGraphNode();
  // var_dump($graphNode);  

  //------------------------------------------------------- [page]  

  // $page_id = "cocacolaTH";
  // $response = $fb->get($page_id,  $accessToken);

  // $graphNode = $response->getGraphNode();
  // var_dump($graphNode);  