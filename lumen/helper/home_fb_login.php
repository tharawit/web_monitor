<?php
$fb = new \Facebook\Facebook([
    'app_id' => APPINFO[0]['id'],
    'app_secret' => APPINFO[0]['secret'],
    'default_graph_version' => APPINFO[0]['version'],
]);
$helper = $fb->getRedirectLoginHelper();
  $permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://demo.ninjari.ninja:8000/fb-callback', $permissions);
echo "
        <style>
            body{
                background:#343a40;
            }
            .loginDivBox{
                margin:auto;
                margin-top:5%;
                width:300px;
                height:500px;
            }
            .loginBtn{
                box-sizing:border-box;
                position:relative;
                margin:0.2em;
                padding:0 15px 0 46px;
                border:none;text-align:left;
                line-height:34px;
                white-space:nowrap;
                border-radius:0.2em;
                font-size:16px;color:#FFF
            }
            .loginBtn:before{
                content:'';
                box-sizing:border-box;
                position:absolute;
                top:0;
                left:0;
                width:34px;
                height:100%;
            }
            .loginBtn:focus{
                outline:none;
            }
            .loginBtn:active{
                box-shadow:inset 0 0 0 32px rgba(0,0,0,0.1);
            }
            .loginBtn--facebook{
                background-color:#4C69BA;
                background-image:linear-gradient(#4C69BA,#3B55A0);
                text-shadow:0-1px 0 #354C8C;
            }
            .loginBtn--facebook:before{
                border-right:#364e92 1px solid;
                background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png')6px 6px no-repeat
            }
            .loginBtn--facebook:hover, .loginBtn--facebook:focus{
                background-color:#5B7BD5;
                background-image:linear-gradient(#5B7BD5,#4864B1)
            }
            .loginBtn--google{
                background:#DD4B39
            }
            .loginBtn--google:before{
                border-right:#BB3F30 1px solid;
                background:url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_google.png')6px 6px no-repeat
            }
            .loginBtn--google:hover, .loginBtn--google:focus{
                background:#E74B37;
            }
        </style>
        <div class=\"loginDivBox\">
        <a href='". htmlspecialchars($loginUrl) ."'>
            <button class='loginBtn loginBtn--facebook'>Login with Facebook</button>
        </a>
        </div>
        ";
