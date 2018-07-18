<?php
/* define session */
session_start();
header("Content-type: charset=utf-8");
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
    if(empty($_SESSION['fb_authen'])){
        require_once("../helper/home_fb_login.php");
    }else{
        return redirect('/dashboard');
    }
});

/* resive fb login callback for difine session */
$router->get('/fb-callback', function () use ($router) {
    if(empty($_SESSION['fb_authen'])){
        /* resive fb login callback */
        require_once("../helper/dashboard_fb_load_info.php");
        /* authen fb acount by email */
        require_once("../helper/check_user_session.php");
        /* create sessin for fb info */
        $_SESSION['fb_authen'] = check_user_session($user_data['email']);
        $_SESSION['fb_id'] = $user_data['id'];
        $_SESSION['fb_name'] = $user_data['name'];
        $_SESSION['fb_email'] = $user_data['email'];
        return redirect('/dashboard');
    }else{
        return redirect('/');

    }
});

/* logout */
$router->get('/logout', function () use ($router) {
    if(!empty($_SESSION['fb_authen'])){
        unset($_SESSION['fb_authen']);
        unset($_SESSION['fb_id']);
        unset($_SESSION['fb_name']);
        unset($_SESSION['fb_email']);
        return redirect('/');
    }else{
        return redirect('/');
    }
});

/* route dashboard page */
$router->get('/dashboard', function () use ($router) {
    if($_SESSION['fb_authen']){
        /* get data from database */
        require_once("../helper/dashboard_getdata.php");
        return view('dashboard',
            [
                'name' => $_SESSION['fb_name'],
                'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
                'email' => $_SESSION['fb_email'],
                'graph_data' => $data
            ]
        );
    }else{
        return redirect('/');
    }
});

$router->get('/ss', function () use ($router) {
    // echo '<hr>'.$_SESSION['name'];
});

/* fetch db */
$router->get('/lookup/{name}', function ($name) use ($router) {
    if($_SESSION['fb_authen']){
    $group_name_selected = urldecode($name);
    $results = app('db')->select("SELECT* FROM `survey_single` WHERE `group_name` LIKE '$group_name_selected'");
    $results = json_encode($results, JSON_UNESCAPED_UNICODE);
    return view('lookup',
        [                
            'name' => $_SESSION['fb_name'],
            'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
            'email' => $_SESSION['fb_email'],
            'posts' => $results
        ]
    );
    }else{
        return redirect('/');
    }
});

/* profile */
$router->get('/profile', function () use ($router) {
    if($_SESSION['fb_authen']){
        return view('profile',
            [                
                'name' => $_SESSION['fb_name'],
                'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
                'email' => $_SESSION['fb_email']
            ]
        );
    }else{
        return redirect('/');
    }
});

/* survey */
$router->get('/survey', function () use ($router) {
    if($_SESSION['fb_authen']){
        return view('survey',
        [                
            'name' => $_SESSION['fb_name'],
            'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
            'email' => $_SESSION['fb_email']
        ]
    );
    }else{
        return redirect('/');
    }
});

/* setting */
$router->get('/setting', function () use ($router) {
    if($_SESSION['fb_authen']){
        return view('setting',
        [                
            'name' => $_SESSION['fb_name'],
            'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
            'email' => $_SESSION['fb_email']
        ]
    );
    }else{
        return redirect('/');
    }
});