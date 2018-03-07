<html>
    <head>
        <title>@yield('title')</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                @yield('header')
            </div>
            <div class="row">
                @yield('body')
                <a href="/about">About</a>
            </div>
            <div class="row">
                @yield('footer')
            </div>
        </div>
    </body>
</html>
