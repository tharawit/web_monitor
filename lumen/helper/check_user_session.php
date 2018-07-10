<?php
function check_user_session($user_email){
    if($user_email <> null){
        return true; 
    }else{
        return false;
    }
}   
