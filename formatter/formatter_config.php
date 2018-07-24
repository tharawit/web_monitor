<?php
class FormatterConnect{

    private static $CONFIG_DB = [
        'host' => 'database',
        'port' => '3306',
        'db' => 'db',
        'username' => 'root',
        'password' => '1234'
    ];
    
    private static $con_state;

    public static function Open(){
        #self::$con_state = new PDO('mysql:host='.self::$CONFIG_DB['host'].';dbname='.self::$CONFIG_DB['db'], self::$CONFIG_DB['username'], self::$CONFIG_DB['password']);
        self::$con_state = new PDO('mysql:host=database;dbname='.self::$CONFIG_DB['db'], self::$CONFIG_DB['username'], self::$CONFIG_DB['password']);
    }
    
    public static function Status(){
        var_dump(self::$con_state);
    }

    public static function Safe($q_str){
        $pattern = '/[\'\/~`\!@#\$%\^&\*\(\)_\-\+=\{\}\[\]\|;:"\<\>,\.\?\\\]/';
        if(preg_match($pattern, $q_str))
            return 0;
        else
            return 1;
    }

    public static function Query($q_str, $fetch){   //ture fetch / false no fetch
        if($fetch){
            $result = self::$con_state->query($q_str);
            return $result->fetchAll(PDO::FETCH_ASSOC); 
        }else{
            self::$con_state->query($q_str);
            return null;
        } 
    }

    public static function Close(){
        self::$con_state = null;
    }
}

// FormatterConnect::Open();
// FormatterConnect::Safe('str');
// $q = FormatterConnect::Query('SELECT * FROM survey_single', true);
// FormatterConnect::Close();
