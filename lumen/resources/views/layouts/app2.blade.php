<html>
    <head>
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="../vendor/bootstrap.min.css" rel="stylesheet" type="text/css">>
        <link href="../css/sb-admin.css" rel="stylesheet" type="text/css">>
        <link href="../vendor/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="../vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
        <style type="text/css">/* Chart.js */
            @-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}
        </style>
    </head>
    <body class="fixed-nav sticky-footer bg-dark" id="page-top">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
            <img class="img-responsive rounded-circle" src="{{ $pic }}">
            <a class="navbar-brand" href="/">
                <span class="nav-link-text">
                    {{ $name }}
                </span>
            </a>
            &emsp;
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Dashboard">
                        <a class="nav-link" href="/dashboard">
                            <i class="fa fa-fw fa-dashboard"></i>
                            <span class="nav-link-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Profile">
                        <a class="nav-link" href="/profile">
                            <i class="fa fa-fw fa-user"></i>
                            <span class="nav-link-text">Profile</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Survey">
                        <a class="nav-link" href="/survey">
                            <i class="fa fa-fw fa-eye"></i>
                            <span class="nav-link-text">Survey</span>
                        </a>
                    </li>
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Setting">
                        <a class="nav-link" href="/setting">
                            <i class="fa fa-fw fa-gears"></i>
                            <span class="nav-link-text">Setting</span>
                        </a>
                    </li>        
                    <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
                        <br>
                        <!-- blank -->
                    </li>
                </ul>
                <ul class="navbar-nav sidenav-toggler">
                    <li class="nav-item">
                        <a class="nav-link text-center" id="sidenavToggler" href="#">
                            <i class="fa fa-fw fa-angle-left"></i>
                            <!-- blank -->
                        </a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <!-- top nev -->
                    <li class="nav-item dropdown"></li>
                    <li class="nav-item dropdown"></li>
                    <li class="nav-item">
                        <!-- <form class="form-inline my-2 my-lg-0 mr-lg-2">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search for...">
                                <span class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </span>
                            </div>
                        </form> -->
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/logout">          
                            <i class="fa fa-fw fa-sign-out"></i>
                            <span class="nav-link-text">Logout</span>
                        </a>
                    </li>
                </ul>   
            </div>
        </nav>
        <!-- Web Content -->
        <div class="content-wrapper">
            @yield('content')
        </div>
    </body>
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top" style="display: inline;">
      <i class="fa fa-angle-up"></i>
    </a>
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript" src="vendor/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script src="vendor/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/Chart.min.js"></script>
    <!-- <script src="http://www.chartjs.org/dist/2.7.2/Chart.bundle.js"></script> -->
    <script src="vendor/jquery.dataTables.js"></script>
    <script src="vendor/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="vendor/sb-admin-datatables.min.js"></script>
    <!-- <script src="vendor/sb-admin-charts.min.js"></script> -->
    @yield('graph_controller')
    <script src="helper/area-charts.js"></script>
</html>
