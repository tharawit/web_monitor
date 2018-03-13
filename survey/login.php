<?php
require_once __DIR__ . '/app-info.php'; // app information
require_once __DIR__ . '/vendor/autoload.php'; // change path as needed

$fb = new \Facebook\Facebook([
  'app_id' => APPINFO[0]['id'],
  'app_secret' => APPINFO[0]['secret'],
  'default_graph_version' => APPINFO[0]['version'],
]);

$helper = $fb->getRedirectLoginHelper();
  
$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/fb-callback.php', $permissions);
echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
echo '<br>';
print_r($permissions);
