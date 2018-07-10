<?php session_start(); ?>
<html>
    <head>
        <title>@yield('title')</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">   
        <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    @yield('header')
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                    @yield('left')
                </div>
                <div class="col-md-10">
                    @yield('right')
                </div>
            </div>

        </div>
    </body>
</html>
