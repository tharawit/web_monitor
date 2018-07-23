<?php    
/* data from bot survey */
$data_group_list = [];
$group_name_list = [];
$raw_data_group = [];
$data_group_name = app('db')->select("SELECT DISTINCT `group_name` FROM `survey_overview` ORDER BY `group_name` ASC");
for($i=0; $i < count($data_group_name); $i++){
    foreach($data_group_name[$i] as $group_name){
            $data_group_post = app('db')->select("SELECT * FROM `survey_overview` WHERE `group_name` LIKE '".$group_name."' ORDER BY `datetime` ASC");
            array_push($group_name_list, $group_name);                
            array_push($data_group_list, $data_group_post);
    }
}
foreach($group_name_list as $group_name){
    array_push($raw_data_group, 
    [
        'name' => $group_name,
        'posts' => [],
        'members' => [],
        'datetime' => []
    ]);   
}
/* get current data */
$current_data = app('db')->select("SELECT DISTINCT `detail`, `datetime`, `perma_link` FROM `survey_single` ORDER BY datetime DESC LIMIT 0, 6");

$data = json_encode($data_group_list, JSON_UNESCAPED_UNICODE);
$current_data = json_encode($current_data, JSON_UNESCAPED_UNICODE);