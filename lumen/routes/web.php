<?php
/* define session */
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
        /* check user */
        require_once('../helper/config_check_admin.php');
        /* check is user info had in database */
        check_user_regis($user_data['name'], $user_data['email']);
        /* defin user status */
        $checked_result = check_user_status($user_data['name'], $user_data['email']);
        $_SESSION['fb_session'] = $checked_result;
        if($checked_result == "baned"){
            return redirect('/logout');
        }else{
            /* get user status */
            $get_user_status = (array) app('db')->select("SELECT status FROM `user` WHERE `email` LIKE '".$user_data['email']."'");
            $get_user_status = (array) $get_user_status[0];
            $get_user_status = $get_user_status['status'];
            $_SESSION['fb_status'] = $get_user_status;
            return redirect('/dashboard');
        }
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
        unset($_SESSION['fb_status']);
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
                'graph_data' => $data,
                'current_data' => $current_data,
                'g_name' => $box_group_list
            ]
        );
    }else{
        return redirect('/');
    }
});

/* lookup fetch db */
$router->get('/lookup/{id}', function ($id) use ($router) {
    if($_SESSION['fb_authen']){
    header("Content-type: charset=utf-8");
    $group_name_selected = urldecode($id);
    $results = app('db')->select("SELECT* FROM `survey_single` WHERE `group_id` LIKE '$group_name_selected'");
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
