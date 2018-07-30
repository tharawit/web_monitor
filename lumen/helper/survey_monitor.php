<?php
function add_survey_monitor($post_id, $email){
    app('db')->insert("INSERT INTO `survey_monitor` (`survey_single_id`, `email`) VALUES ('".$post_id."', '".$email."')");
}

function load_survey_monitor($email){
    $result = [];
    $data_monitor = app('db')->select('SELECT * FROM `survey_monitor` WHERE email = "'.$email.'" ORDER BY id DESC');
    for($i=0; $i < count($data_monitor); $i++){
        $arry_cache = get_object_vars($data_monitor[$i]);
        $post = app('db')->select('SELECT * FROM `survey_single` WHERE `post_id` = "'.$arry_cache['survey_single_id'].'"');
        array_push($result, $post);
    }
    return json_encode($result, JSON_UNESCAPED_UNICODE);
}
