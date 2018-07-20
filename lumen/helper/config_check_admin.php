<?php
define('admin_email', 'tharawit.55@gmail.com');

function check_user_regis($current_name, $current_email){
    $data_user = app('db')->select("SELECT `email`, `status` FROM `user` WHERE `email` LIKE  '".$current_email."'");
    // is account never insert before
   $status = ($current_email == admin_email)? "admin" : "member";
    if(count($data_user) == 0){
        app('db')->insert("INSERT INTO `user` (`name`, `email`, `status`) VALUES ('".$current_name."', '".$current_email."','".$status."')");
    }
}

function check_user_status($current_name, $current_email){
    $data_user = app('db')->select("SELECT `email`, `status` FROM `user` WHERE `email` LIKE  '".$current_email."'");
    // // get info by looping
    $result_fetch_value = [];
    foreach($data_user[0] as $value){
        array_push($result_fetch_value, $value);
    }
    return $result_fetch_value[1];
}
