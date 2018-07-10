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
    if(empty(app('session')->has('fb_authen'))){
        require_once("../helper/home_fb_login.php");
    }else{
        return redirect('/dashboard');
    }
});

/* resive fb login callback for difine session */
$router->get('/fb-callback', function () use ($router) {
    if(empty(app('session')->has('fb_authen'))){
        /* resive fb login callback */
        require_once("../helper/dashboard_fb_load_info.php");
        /* authen fb acount by email */
        require_once("../helper/check_user_session.php");
        /* create sessin for fb info */
        app('session')->put('fb_authen', check_user_session($user_data['email']));
        app('session')->put('fb_id', $user_data['id']);
        app('session')->put('fb_name', $user_data['name']);
        app('session')->put('fb_email', $user_data['email']);
        // echo app('session')->get('fb_id');
        dd(app('session')->all());
        // return redirect('/dashboard');
    }else{
        return redirect('/dashboard');

    }
});

/* logout */
$router->get('/logout', function () use ($router) {
    if(!empty(app('session')->has('fb_authen'))){
        app('session')->remove('fb_authen');
        app('session')->remove('fb_id');
        app('session')->remove('fb_name');
        app('session')->remove('fb_email');
        return redirect('/');
    }else{
        return redirect('/');
    }
});

/* route dashboard page */
$router->get('/dashboard', function () use ($router) {
    if(app('session')->has('fb_authen')){
        dd(app('session')->all());
        // return redirect('/');
    }else{
        echo "RUN DASHBOARD OKAY";
        dd(app('session')->all());

    }
});
$router->get('/ss', function () use ($router) {
    dd(app('session')->all());
});