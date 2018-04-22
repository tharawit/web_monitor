<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="vendor/bootstrap.min.css" rel="stylesheet" type="text/css">>
    <link href="css/sb-admin.css" rel="stylesheet" type="text/css">>
    <link href="vendor/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="vendor/font-awesome.min.css" rel="stylesheet" type="text/css">
    <style type="text/css">/* Chart.js */
@-webkit-keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}@keyframes chartjs-render-animation{from{opacity:0.99}to{opacity:1}}.chartjs-render-monitor{-webkit-animation:chartjs-render-animation 0.001s;animation:chartjs-render-animation 0.001s;}</style>
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
  <!-- Navigation-->
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
          <a class="nav-link" href="#dashboard">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Profile">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-user"></i>
            <span class="nav-link-text">Profile</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Survey">
          <a class="nav-link" href="tables.html">
            <i class="fa fa-fw fa-eye"></i>
            <span class="nav-link-text">Survey</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="" data-original-title="Setting">
          <a class="nav-link" href="#setting">
            <i class="fa fa-fw fa-gears"></i>
            <span class="nav-link-text">Setting</span>
          </a>
        </li>        
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="">
          <br>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle mr-lg-2" id="messagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-envelope"></i>
            <span class="d-lg-none">Messages
              <span class="badge badge-pill badge-primary">12 New</span>
            </span>
            <span class="indicator text-primary d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="messagesDropdown">
            <h6 class="dropdown-header">New Messages:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>David Miller</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">Hey there! This new version of SB Admin is pretty awesome! These messages clip off when they reach the end of the box so they don't overflow over to the sides!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>Jane Smith</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I was wondering if you could meet for an appointment at 3:00 instead of 4:00. Thanks!</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <strong>John Doe</strong>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">I've sent the final files over to you for review. When you're able to sign off of them let me know and we can discuss distribution.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all messages</a>
          </div> -->
        </li>
        <li class="nav-item dropdown">
          <!-- <a class="nav-link dropdown-toggle mr-lg-2" id="alertsDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-fw fa-bell"></i>
            <span class="d-lg-none">Alerts
              <span class="badge badge-pill badge-warning">6 New</span>
            </span>
            <span class="indicator text-warning d-none d-lg-block">
              <i class="fa fa-fw fa-circle"></i>
            </span>
          </a>
          <div class="dropdown-menu" aria-labelledby="alertsDropdown">
            <h6 class="dropdown-header">New Alerts:</h6>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-danger">
                <strong>
                  <i class="fa fa-long-arrow-down fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">
              <span class="text-success">
                <strong>
                  <i class="fa fa-long-arrow-up fa-fw"></i>Status Update</strong>
              </span>
              <span class="small float-right text-muted">11:21 AM</span>
              <div class="dropdown-message small">This is an automated server response message. All systems are online.</div>
            </a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item small" href="#">View all alerts</a>
          </div> -->
        </li>
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
          <a class="nav-link" href="/">          
            <i class="fa fa-fw fa-sign-out"></i>
            <span class="nav-link-text">Logout</span>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- Web Content -->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
      <div class="row">
        <!-- Card Icon -->
        <div>
        <div class="col-xl-3 col-sm-6 col-lg-6 mb-3">
          <div class="card text-white bg-success o-hidden ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-users"></i>
              </div>
              <div class="mr-5">Summary</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
      </div>
      <div>
      <div class="col-xl-3 col-sm-6 col-lg-6 mb-3">
          <div class="card text-white bg-primary o-hidden ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-mars"></i>
              </div>
              <div class="mr-5">Male</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
        </div>
      </div>
      <div>
        <div class="col-xl-3 col-sm-6 ol-lg-6 mb-3">
          <div class="card text-white bg-danger o-hidden ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-venus"></i>
              </div>
              <div class="mr-5">Female</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
          </div>
          <div>
          <div class="col-xl-3 col-sm-6 ol-lg-6 mb-3">
          <div class="card text-white bg-warning o-hidden ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-transgender-alt"></i>
              </div>
              <div class="mr-5">Other</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left"></span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
          </div          
 
        </div>
      </div>
      Area Chart Example
      <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-area-chart"></i> Area Chrt Example</adiv>
        <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
          <canvas id="myAreaChart" width="2236" height="670" class="chartjs-render-monitor" style="display: block; height: 335px; width: 1118px;"></canvas>
        </div>
        <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
      </div>
      <div class="row">
        <div class="col-md-5 col-lg-5">
          <!-- Example Bar Chart Card-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-bar-chart"></i> Bar Chart Example
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-sm-8 my-auto">
                <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
                  <canvas id="myBarChart" width="942" height="470" class="chartjs-render-monitor" style="display: block; height: 235px; width: 471px;"></canvas>
                </div>
                <div class="col-sm-4 text-center my-auto">
                  <div class="h4 mb-0 text-primary">34,693</div>
                  <div class="small text-muted">Male</div>
                  <hr>
                  <div class="h4 mb-0 text-warning">18,474</div>
                  <div class="small text-muted">Female</div>
                  <hr>
                  <div class="h4 mb-0 text-success">16,219</div>
                  <div class="small text-muted">Other</div>
                </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          <div class="col-md-7 col-lg-7">
            <!-- Example Pie Chart Card-->
            <div class="card mb-3">
            <div class="card-header">
              <i class="fa fa-pie-chart"></i> Pie Chart Example</div>
            <div class="card-body"><div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;"><div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div></div><div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;"><div style="position:absolute;width:200%;height:200%;left:0; top:0"></div></div></div>
              <canvas id="myPieChart" width="650" height="650" class="chartjs-render-monitor" style="display: block; height: 325px; width: 325px;"></canvas>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          </div>
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
    <script src="vendor/jquery.dataTables.js"></script>
    <script src="vendor/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="vendor/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="vendor/sb-admin-datatables.min.js"></script>
    <script src="vendor/sb-admin-charts.min.js"></script>
  </div>
  <footer style="z-index:10; position:absolute; button:0px; width:100%; color:#ffff;" class="sticky-footer">
     <small>Copyright © By Joe Tharawit 2018</small>
  </footer>
</body>