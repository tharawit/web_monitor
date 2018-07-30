<?php 
error_reporting(0);
session_start();
if($_SESSION['authen_D'] == true){
include('./formatter_config.php');
?>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
<script>
    var view = 0
    function viewTop(){
        if(view == 0){
            window.scroll({
            top: 1000,
            behavior: "smooth"
        });
        view = 1
        }else{
            window.scroll({
            top: 0,
            behavior: "smooth"
        });
        view = 0
        }
    }
</script>
</head>
<body>
<!-- --------- -->
<?php 
    if(isset($_SESSION['genD_status'])){
        if($_SESSION['genD_status'] == 'noti'){
            echo "<div id=\"Dnoti\" class=\"alert alert-success\" role=\"alert\">This is a success in process!</div>";
        }else{
            echo "<div id=\"Dnoti\" class=\"alert alert-danger\" role=\"alert\">This is a fail to process !</div>";            
        }
        echo "<script>setTimeout(function(){ document.getElementById(\"Dnoti\").style.display = \"none\";,5000);</script>";
    }
    unset($_SESSION['genD_status']);
?>
<!-- --------- -->
<div style="float:right;margin-top:5px;margin-right:5px;width:100px;">
<form action="index.php" method="post">
    <input type="hidden" name="auth" value="auth_remove">
    <button style="width:100%;" type="submit" class="btn btn-danger">Logout</button>
</form>
</div>

<div style="z-index:2; position:fixed;float:left ; margin-top:200px;margin-left:5px;width:50px;opacity:0.8;">
    <button style="width:100%;" onclick="viewTop()" class="btn btn-info">
    <svg aria-hidden="true" data-prefix="fas" data-icon="arrows-alt-v" class="svg-inline--fa fa-arrows-alt-v fa-w-8" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path fill="currentColor" d="M214.059 377.941H168V134.059h46.059c21.382 0 32.09-25.851 16.971-40.971L144.971 7.029c-9.373-9.373-24.568-9.373-33.941 0L24.971 93.088c-15.119 15.119-4.411 40.971 16.971 40.971H88v243.882H41.941c-21.382 0-32.09 25.851-16.971 40.971l86.059 86.059c9.373 9.373 24.568 9.373 33.941 0l86.059-86.059c15.12-15.119 4.412-40.971-16.97-40.971z"></path></svg>
    </button>
</div>

<br>
<div class="container" id="inputSet">
<h3>Survey Overview</h3>
<form action="index.php" method="post">
<input type="hidden" name="chanel" value="1">
<input name="groupname" type="text" placeholder="Group Name" class="form-control">
<input name="groupid" type="number" placeholder="Group ID ( 0000000000 )" class="form-control">
<div class="row">
    <div class="col-lg-3 col-md-4 col-xs-12" ><input name="totalpost" type="number" placeholder="Total Post" class="form-control"></div>
    <div class="col-lg-3 col-md-4 col-xs-12" ><input name="totalmember" type="number" placeholder="Total member" class="form-control"></div>
</div>
<br>
<button type="submit" class="btn btn-primary"> Add Overview  Survey</button>
</form>

<form action="index.php" method="post">
<hr>
<h3>Survey Single ( Post info )</h3>
<input type="hidden" name="chanel" value="2">
<input name="groupname" type="text" placeholder="Group Name" class="form-control">
<input name="groupid" type="number" placeholder="Group ID ( 0000000000 )" class="form-control">
<input name="permalink" type="text" placeholder="Permalink ( https://facebook.com/groupExsample )" class="form-control">
<input name="postid" type="number" placeholder="Post ID ( 0000000000 )" class="form-control">
<br>
<textarea name="detail" placeholder="Detail ( Post Topic )" class="form-control"></textarea>
<div class="row">
    <div class="col-lg-3 col-md-4 col-xs-12" ><input name="com" type="number" placeholder="Comment" class="form-control"></div>
    <div class="col-lg-3 col-md-4 col-xs-12" ><input name="eng" type="number" placeholder="Engagement" class="form-control"></div>
    <div class="col-lg-3 col-md-4 col-xs-12" ><input name="share" type="number" placeholder="Shared" class="form-control"></div>
</div>
<br>
<button type="submit" class="btn btn-info"> Add Group in Single Survey</button>
</form>

<form action="index.php" method="post">
    <hr>
    <h3>User</h3>
    <input type="hidden" name="chanel" value="3">
    <input name="username" type="text" placeholder="User Name" class="form-control">
    <input name="useremail" type="text" placeholder="User Email ( email@mail.com )" class="form-control">
    <select class="custom-select" name="usertype">
        <option selected value="member">Member</option>
        <option value="manager">Manager</option>
        <option value="baned">Baned</option>
        <option value="admin">Admin</option>
    </select>
    <br><br>
    <button type="submit" class="btn btn-primary"> Create User</button>
</form>

<form action="index.php" method="post">
    <hr>
    <h3>Survey Group</h3>
    <input type="hidden" name="chanel" value="4">
    <input name="groupname" type="text" placeholder="Group Name" class="form-control">
    <input name="grouppermalink" type="text" placeholder="Permalink ( https://facebook.com/groupExsample )" class="form-control">
    <input name="groupid" type="number" placeholder="Group ID ( 0000000000 )" class="form-control" style="width:300px;">
    <br>
    <button type="submit" class="btn btn-primary"> Create Group Type</button>
</form>

<div>
    <hr>
    <h3>Table Manager </h3>
    <form action="index.php" method="post">
    <input type="hidden" name="chanel" value="5">
    <input type="hidden" name="gentable" value="1">
    <button type="submit" class="btn btn-warning" onclick="confirm('Are you sure to reset all tables ?')"> Reset Table</button>
    </form>

    <form action="index.php" method="post">
    <input type="hidden" name="chanel" value="6">
    <select class="custom-select" name="table" style="width:300px;">
    <?php 
        FormatterConnect::Open();
        $table_manger_show_table = FormatterConnect::Query('SHOW TABLES', true);
        FormatterConnect::Close();
        foreach($table_manger_show_table as $table){
            echo "<option selected value=\"".$table['Tables_in_db']."\">".$table['Tables_in_db']."</option>";
        } 
    ?>
    </select>
    <button type="submit" class="btn btn-danger" onclick="confirm('Are you sure to clear all data in this table ?')"> Clear All</button>
    </form>
</div>
</div>
<!-- View all data -->
<br><hr><br>
<div class="container" id="viewTable">
<h3> Show all data </h3>
    <form action="index.php" method="post">
        <input type="hidden" name="chanel" value="7">
        <input type="hidden" name="view" value="view">
        <select class="custom-select" name="table" style="width:300px;">
        <?php 
            FormatterConnect::Open();
            $table_manger_show_table = FormatterConnect::Query('SHOW TABLES', true);
            FormatterConnect::Close();
            foreach($table_manger_show_table as $table){
                echo "<option value=\"".$table['Tables_in_db']."\">".$table['Tables_in_db']."</option>";
            } 
        ?>
        </select>
        <button type="submit" class="btn btn-info">Show All Data</button>
    </form>
</div>
<!-- END View all data -->
</body>
</html>
<?php 
}else{
?>
<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
        <div class="col-lg-3 col-xs-12"></div>
        <div class="col-lg-7 col-xs-12">
        <h3>Webmonitor Manager</h3>
        <form action="index.php" method="post">
            <input type="hidden" name="auth" value="auth">
            <input style="width:100%;" name="passwd" type="text" placeholder="Passwords" class="form-control">
            <br>
            <button style="width:100%;" type="submit" class="btn btn-primary">Login</button>
        </form>
        </div>
        <div class="col-lg-3 col-xs-12"></div>
        </div>
    </body>
</html>
<?php
    }
?>
<?php 
function easyInsert($str){
    FormatterConnect::Open();
    FormatterConnect::Query($str, false);
    FormatterConnect::Close();
}
if(isset($_POST['chanel']) && $_SESSION['authen_D'] == true){
switch($_POST['chanel']){
 /**/
case 1:
$group_name = $_POST['groupname'];
$group_id = $_POST['groupid'];
$group_total_post = $_POST['totalpost'];
$group_total_member = $_POST['totalmember'];

$sql_str = "INSERT INTO `survey_overview` (
    `group_id`,
    `group_name`, 
    `total_post`,
    `total_member`,
    `datetime`
) VALUES (
    '".$group_id."',
    '".$group_name."',
    '".$group_total_post."',
    '".$group_total_member."',
    now()
) 
";
easyInsert($sql_str );

$_SESSION['genD_status'] = 'noti';
header('location: ./index.php');
break;

 /**/
case 2:
$group_name = $_POST['groupname'];
$group_permalink = $_POST['permalink'];
$group_detail = $_POST['detail'];
$group_comment = $_POST['com'];
$group_engagement = $_POST['eng'];
$group_shared = $_POST['share'];
$group_id = $_POST['groupid'];
$post_id = $_POST['postid'];

$sql_str = "INSERT INTO `survey_single` (
    `group_id`,
    `group_name`,
    `comment`,
    `engagement`,
    `shared`,
    `perma_link`,
    `detail`,
    `datetime`,
    `post_id`
) VALUES (
    '".$group_id."',
    '".$group_name."',
    '".$group_comment."',
    '".$group_engagement."',
    '".$group_shared."',
    '".$group_permalink."',
    '".trim($group_detail)."',
    now(),
    '".$post_id."'
) 
";
easyInsert($sql_str);
$_SESSION['genD_status'] = 'noti';
header('location: ./index.php');
break;

 /* user */
 case 3:
$username = $_POST['username'];
$useremail = $_POST['useremail'];
$usertype = $_POST['usertype'];
$sql_str = "INSERT INTO `user` (
    `name`,
    `email`,
    `status`
) VALUES (
    '".$username."',
    '".$useremail."',
    '".$usertype."'
) 
";
easyInsert($sql_str );
$_SESSION['genD_status'] = 'noti';
header('location: ./index.php');
break;

 /* survey group */
case 4:
$group_name = $_POST['groupname'];
$group_id = $_POST['groupid'];
$group_permalink = $_POST['grouppermalink'];
$sql_str = "INSERT INTO `group` (
    `group_id`,
    `group_name`,
    `permalink`
) VALUES (
    '".$group_id."',
    '".$group_name."',
    '".$group_permalink."'
) 
";
easyInsert($sql_str );
$_SESSION['genD_status'] = 'noti';
header('location: ./index.php');
break;

 /* reset table */
case 5:
    $gentable = $_POST['gentable'];    
    $sql_str = [
    "
        DROP TABLE `user`, `group`,`survey_single`,`survey_overview`,`survey_monitor`;
    ",
    "
        CREATE TABLE `user` (
            `id` int(3) NOT NULL AUTO_INCREMENT,
            `name` varchar(200) NOT NULL,
            `email` varchar(200) NOT NULL,
            `status` varchar(200) NOT NULL,
            PRIMARY KEY (`id`)
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
    ",
    "
        CREATE TABLE `group` (
            `id` int(2) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (`id`),
            `group_id` varchar(200) NOT NULL,
            `group_name` varchar(200) NOT NULL,
            `permalink` varchar(200) NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
    ",
    "
        CREATE TABLE `survey_single` (
            `id` int(5) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (`id`),
            `group_id` varchar(200) NOT NULL,
            `group_name` varchar(200) NOT NULL,
            `comment` varchar(200) NOT NULL,
            `engagement` varchar(200) NOT NULL,
            `shared` varchar(200) NOT NULL,
            `perma_link` varchar(200) NOT NULL,
            `detail` text(2000) NOT NULL,    
            `datetime` datetime NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
    ",
    "
        CREATE TABLE `survey_overview` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (`id`),
            `group_id` varchar(200) NOT NULL,
            `group_name` varchar(200) NOT NULL,    
            `total_post` varchar(200) NOT NULL,
            `total_member` varchar(200) NOT NULL,
            `datetime` datetime NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;    
    ",
    "
        CREATE TABLE `survey_monitor` (
            `id` int(11) NOT NULL AUTO_INCREMENT,
            PRIMARY KEY (`id`),
            `survey_single_id` varchar(200) NOT NULL,
            `email` varchar(200) NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
    ",
    "
        ALTER TABLE `survey_single`  ADD post_id varchar(200) NOT NULL
    ",
    "
    "
    ];
    FormatterConnect::Open();
    foreach($sql_str as $query_lists){
        FormatterConnect::Query($query_lists, false);
    }
    FormatterConnect::Close();
    $_SESSION['genD_status'] = 'noti';
    header('location: ./index.php');
break;
 
/* clear data table*/
case 6:
    $table_name = $_POST['table'];
    $sql_str = "DELETE FROM `".$table_name."`";
    FormatterConnect::Open();
    FormatterConnect::Query($sql_str, false);
    FormatterConnect::Close();
    $_SESSION['genD_status'] = 'noti';
    header('location: ./index.php');
break;

case 7:
    $table = $_POST['table'];
    $sql_str1 = "SHOW COLUMNS FROM `".$table."`";
    $sql_str2 = "SELECT * FROM `".$table."`";
    FormatterConnect::Open();
    $result_column = FormatterConnect::Query($sql_str1, true);
    $result_value = FormatterConnect::Query($sql_str2, true);
    FormatterConnect::Close();
    echo "<hr>&emsp;<h3>SELECT TABLE : <span style=\"color:#0099ff;\">".$table."</span></h3></hr>";
    echo "<table class=\"table table-striped table-bordered table-hover\" style=\"zoom: 70%;\">";
    echo "<tr>";
    foreach($result_column as $col){
        echo "<td>".$col['Field']."</td>";
    }
    echo "</tr>";
    foreach($result_value as $value_row){
        echo "<tr>";
        foreach($value_row as $value_col){
            echo "<td>".substr($value_col,0, 200)."</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    header('location: ./index.php');
    break;
} //end switch

}else{
    if($_POST['auth'] == 'auth' && $_POST['passwd'] == "reborn"){
        $_SESSION['authen_D'] = true;
        header('location: ./index.php');
    }
}

if($_POST['auth'] == 'auth_remove'){
    $_SESSION['authen_D'] = false;
    unset($_SESSION['authen_D']);
    session_destroy();
    header('location: ./index.php');   
}
?>
