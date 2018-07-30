<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="../pics/analysis.png">
        <link href="../css/bootstrap.min.css" rel="stylesheet">   
        <script type="../text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
        <script type="../text/javascript" src="js/bootstrap.min.js"></script>
        <link href="../vendor/dataTables.bootstrap4.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            @yield('content')
        </div>
    </body>
</html>
@yield('controller')
