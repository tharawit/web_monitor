<?php
session_start();
// fb api login
require '../vendor/autoload.php'; // change path as needed
define('APPINFO', array(
    [
        'id' => '387783485025646',
        'secret' => '3f6d7672e1ed3c99aaac59ab52ac4ea4',
        'version' => 'v2.10',
    ]
));

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

/* route home page */
$router->get('/', function () use ($router) {
    // return view('home', ['name' => 'James']);
    $fb = new \Facebook\Facebook([
        'app_id' => APPINFO[0]['id'],
        'app_secret' => APPINFO[0]['secret'],
        'default_graph_version' => APPINFO[0]['version'],
    ]);

    $helper = $fb->getRedirectLoginHelper();
  
    $permissions = ['email']; // Optional permissions
    $loginUrl = $helper->getLoginUrl('http://localhost:8000/simple', $permissions);
    
    echo "<style>.loginBtn{box-sizing:border-box;position:relative;margin:0.2em;padding:0 15px 0 46px;border:none;text-align:left;line-height:34px;white-space:nowrap;border-radius:0.2em;font-size:16px;color:#FFF}.loginBtn:before{content:'';box-sizing:border-box;position:absolute;top:0;left:0;width:34px;height:100%}.loginBtn:focus{outline:none}.loginBtn:active{box-shadow:inset 0 0 0 32px rgba(0,0,0,0.1)}.loginBtn--facebook{background-color:#4C69BA;background-image:linear-gradient(#4C69BA,#3B55A0);text-shadow:0-1px 0 #354C8C}.loginBtn--facebook:before{border-right:#364e92 1px solid;background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png')6px 6px no-repeat}.loginBtn--facebook:hover,.loginBtn--facebook:focus{background-color:#5B7BD5;background-image:linear-gradient(#5B7BD5,#4864B1)}.loginBtn--google{background:#DD4B39}.loginBtn--google:before{border-right:#BB3F30 1px solid;background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png')6px 6px no-repeat}.loginBtn--google:hover,.loginBtn--google:focus{background:#E74B37}</style><a href='". htmlspecialchars($loginUrl) ."'><button class='loginBtn loginBtn--facebook'>Login with Facebook</button></a>"; 
});

/* route simple page */
$router->get('/simple', function () use ($router) {
    // fb login response
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
    // data from bot survey
    return view('simple',
        [
            'name' => $user_data['name'],
            'pic' => 'https://graph.facebook.com/'.$user_data['id'].'/picture',
            'email' => $user_data['email']
        ]
    );

});

/* test fetch db */
$router->get('/testdb', function () use ($router) {
    $results = app('db')->select("SELECT* FROM `survey_single`");
    echo '<h1> Test DB </h1>';
    var_dump($results);
    echo "<hr/>";
    $results = app('db')->select("SELECT* FROM `survey_overview`");
    echo '<h1> Test DB </h1>';
    var_dump($results);
});