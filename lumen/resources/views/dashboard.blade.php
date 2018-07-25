@extends('layouts.app2')
@section('title', 'App Monitor')
@section('content')

<div class="container">

<div class="row">
<div class="col-md-12 col-sm-12">
<div class="card mb-3">
  <div class="card-header">
    <span class="fa fa-book">
        Cards Group
    </span>
    </div>
    <div class="card-body">
        <div class="container">
            <div id="box-lists" class="row">
            </div>
        </div>
    </div>
</div>
</div>
</div>

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
      <canvas id="myBarChart" width="100%" height="30%" class="chartjs-render-monitor">
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
      <span class="fa fa-comment"> Current posts
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
/* box group list  */
var box_group_list = {!! $g_name !!}

var template_str_current_data_list = ""
for(data_list_index in current_data_list){
    template_str_current_data_list = template_str_current_data_list + "<tr style=\"font-size:14px;\"><td style=\"width:75%;\"><a target=\"_blank\" href=\""+ current_data_list[data_list_index]['perma_link'] +"\"><span style=\"text-decoration:none;\">" + current_data_list[data_list_index]['detail'].slice(0,115) + "</span></a></td><td style=\"width:25%;\">"+ current_data_list[data_list_index]['datetime'] +"</td></tr>"
}
document.getElementById('current_data_list').innerHTML = template_str_current_data_list
</script>

@endsection

@section('graph_controller')
<script type="text/javascript">
    var graph_data = {!! $graph_data !!}
</script>

<script src="helper/crad-group.js"></script>
@endsection
