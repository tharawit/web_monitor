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
        print_r(app('session')->all());
        echo "<hr><a href=\"http://localhost:8000/ss\">Test</a>";
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
    app('session')->put('test', 'best');
    print_r(app('session')->all());
    echo storage_path();
});




/* route dashboard page */
// $router->get('/dashboard', function () use ($router) {
    // if(empty($_SESSION['fb_login']) || $_SESSION['fb_login'] == false){
        /* fb login load user info*/
        
       
 
        // if($_SESSION['fb_login']){
        //     $_SESSION['fb_email'] = $user_data['email'];
        //     $_SESSION['fb_id'] = $user_data['id'];
        //     $_SESSION['fb_name'] = $user_data['name'];
        // }else{
        //     // redirect("/");
        //     echo 0;
        // }
    // }
    /* get data from database */
    // require_once("../helper/dashboard_getdata.php");
    // return view('dashboard',
    //     [
    //         'name' => $_SESSION['fb_name'],
    //         'pic' => 'https://graph.facebook.com/'.$_SESSION['fb_id'].'/picture',
    //         'email' => $_SESSION['fb_email'],
    //         'graph_data' => $data
    //     ]
    // );


/* test fetch db */
// $router->get('/lookup/{name}', function ($name) use ($router) {
//     header("Content-type: charset=utf-8");
//     $group_name_selected = urldecode($name);
//     $results = app('db')->select("SELECT* FROM `survey_single` WHERE `group_name` LIKE '$group_name_selected'");
//     $results = json_encode($results, JSON_UNESCAPED_UNICODE);
//     return view('lookup',
//         [
//             'posts' => $results
//         ]
//     );
// });



    // $router->get('/error', function() use ($router){
    //     return "<center><h1>Error Page please Login with Facebook</h1></center>";
    // });

