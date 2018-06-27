<?php
$fb = new \Facebook\Facebook([
    'app_id' => APPINFO[0]['id'],
    'app_secret' => APPINFO[0]['secret'],
    'default_graph_version' => APPINFO[0]['version'],
]);
$helper = $fb->getRedirectLoginHelper();
$accessToken = $helper->getAccessToken();
$query_str ="me?fields=id,name,email";
$response = $fb->get($query_str, $accessToken);
$user_data = $response->getDecodedBody();