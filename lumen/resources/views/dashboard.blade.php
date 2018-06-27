@extends('layouts.app2')
@section('title', 'App Monitor')
@section('content')
<div class="card mb-3">
  <div class="card-header">
    <span class="fa fa-area-chart">
      Information Overview
    </span>
  </div>
  <div class="card-body">
    <!-- URL link -->
    <div id="menu">
    </div>

    <p>Area Graph</p>
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

    <div class="conatainer">
    <div class="row">
    
    <div class="col-md-12 col-lg-12">
    <p>PieChart Graph</p>
    <canvas id="myPieChart" width="2236" height="670" class="chartjs-render-monitor" style="display: block; height: 335px; width: 1118px;">
    </canvas>
    </div>

    <div class="col-md-12 col-lg-12">
    <p>Bar Graph</p>
    <canvas id="myBarChart" width="2236" height="670" class="chartjs-render-monitor" style="display: block; height: 335px; width: 1118px;">
    </canvas>
    </div>
    
    </div>
    </div>

    </div>
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
  var graph_data = {!! $graph_data !!}
</script>
@endsection