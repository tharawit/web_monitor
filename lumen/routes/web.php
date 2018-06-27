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
$router->get('/lookup', function () use ($router) {
    // $results = app('db')->select("SELECT* FROM `survey_single`");
    // echo '<h1> Test DB </h1>';
    // var_dump($results);
    // echo "<hr/>";


//     $l = [
//         "ไทยรัฐ แจ้งข่าว-คลิป",
//         "ข่าวด่วน...ปาก ต่อ ปาก",
//         "ทันข่าว ทันโลก",
//         "ข่าวจาก อาสากู้ภัย THAILAND",
//         "ข่าวสด ทันเหตุการณ์"
//     ];
//     for($i = 1 ; $i < 5 ;$i++){
//         foreach($l as $value){
//             $group_name = $value;
//             $total_post = rand(452,1600);
// $total_member = rand(60000,600000);
// $q = "INSERT INTO `survey_overview` (
//     `group_name`,
//     `total_post`,
//     `total_member`,
//     `datetime`
// ) VALUES (
//     \"".$group_name."\",
//     \"".$total_post."\",
//     \"".$total_member."\",
//     \"".date("Y-$i-d h:i:s")."\"
// );";
// $r = app('db')->select($q);
// echo ($r?"OKAY":"FAIL");  
// echo "<br>";
//         }
//         echo "<hr>";
//     }

});
