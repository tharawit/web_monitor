@extends('layouts.app2')
@section('title', 'App Monitor')
@section('content')

<div class="container">
<!-- ------ -->
<div class="row">
        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden h-15">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">00012345678912345678912</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">000123456789123456789123456789</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden h-15">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-share-alt"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden h-15">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 New Orders!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-2 col-sm-6 mb-3"></div>

        <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-15">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
         <div class="col-xl-4 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden h-15">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>

        <div class="col-xl-2 col-sm-6 mb-3"></div>
      </div>
</div>
<!-- ------ -->
<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card mb-3">
  <div class="card-header">
    <span class="fa fa-area-chart">
      Group Posts
    </span>
  </div>
  <div class="card-body">
    <!-- URL link -->
    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
      <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0">
        </div>
      </div>
        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
        <div style="position:absolute;width:200%;height:200%;left:0; top:0">
        </div>
      </div>
    </div>
    <canvas id="myAreaChart" width="2236" height="670" class="chartjs-render-monitor" style="display: block; height: 335px; width: 1118px;">
    </canvas>
  </div>
</div>
</div>
</div>

<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card mb-3">
  <div class="card-header">
    <span class="fa fa-bar-chart">
      Group members
    </span>
  </div>
    <div class="card-body">
      <canvas id="myBarChart" width="100%" height="30px" class="chartjs-render-monitor">
      </canvas>
  </div>
</div>
</div>

<div class="col-md-5 col-sm-12">
<div class="card mb-3">
  <div class="card-header">
    <span class="fa fa-pie-chart">
      Summry members
    </span>
  </div>
    <div class="card-body">
      <canvas id="myPieChart" width="100%" height="100" class="chartjs-render-monitor">
      </canvas>
  </div>
</div>
</div>

<div class="col-md-7 col-sm-12">
<div class="card mb-1">
    <div class="card-header">
      <span class="fa fa-comment">
        Current posts
      </span>
    </div>
    <div class="card-body">
      <table class="table table-striped" id="current_data_list">
      </table>
    </div>
</div>
</div>
<br>
</div>
</div>
<script type="text/javascript">
  /* extract current data */
  var current_data_list = {!! $current_data !!}
  var template_str_current_data_list = ""
  for(data_list_index in current_data_list){
    template_str_current_data_list = template_str_current_data_list + "<tr style=\"font-size:14px;\"><td style=\"width:75%;\"><a target=\"_blank\" href=\""+ current_data_list[data_list_index]['perma_link'] +"\"><span style=\"text-decoration:none;\">" + current_data_list[data_list_index]['detail'] + "</span></a></td><td style=\"width:25%;\">"+ current_data_list[data_list_index]['datetime'] +"</td></tr>"
  }
  document.getElementById('current_data_list').innerHTML =  template_str_current_data_list
</script>
@endsection

@section('graph_controller')
<script type="text/javascript">
    var graph_data = {!! $graph_data !!}
</script>
@endsection

