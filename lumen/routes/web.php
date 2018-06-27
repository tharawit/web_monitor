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

/* route home page */
$router->get('/', function () use ($router) {
    require_once("../helper/home_fb_login.php");
});

/* route dashboard page */
$router->get('/dashboard', function () use ($router) {
    /* fb login load user info*/
    require_once("../helper/dashboard_fb_load_info.php");
    /* get data from database */
    require_once("../helper/dashboard_getdata.php");
    return view('dashboard',
        [
            'name' => $user_data['name'],
            'pic' => 'https://graph.facebook.com/'.$user_data['id'].'/picture',
            'email' => $user_data['email'],
            'graph_data' => $data
        ]
    );
});

/* test fetch db */
$router->get('/lookup/{name}', function ($name) use ($router) {
    header("Content-type: charset=utf-8");
    $group_name_selected = urldecode($name);
    $results = app('db')->select("SELECT* FROM `survey_single` WHERE `group_name` LIKE '$group_name_selected'");
    $results = json_encode($results, JSON_UNESCAPED_UNICODE);
    return view('lookup',
        [
            'posts' => $results
        ]
    );
});
