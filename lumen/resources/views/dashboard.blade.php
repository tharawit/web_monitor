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
    <!-- <div class="card-footer small text-muted">
    </div> -->
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
/* set line */
var graph_colors = {
  line: ["rgba(2,117,216,0.2)"],
  hover_line: ["rgba(2,117,216,1)"],
  bg_line: ["rgba(2,117,216,0.2)"]
};
/* get data from db */
var datalist = {!! $graph_data !!};
function fetchdata(){
      var result_datalist = []
      for (var i = 1;i < datalist.length; i++){
        result_datalist = result_datalist.concat(
          {
            label: datalist[i],
            lineTension: .3,
            backgroundColor: "rgba(2,117,216,0.2)",
            borderColor: "rgba(2,117,216,1)",
            pointRadius: 5,
            pointBackgroundColor: "rgba(2,117,216,1)",
            pointBorderColor: "rgba(255,255,255,0.8)",
            pointHoverRadius: 5,
            pointHoverBackgroundColor: "rgba(2,117,216,1)",
            pointHitRadius: 20,
            pointBorderWidth: 2,
            data: 
              [Math.floor((Math.random() * 1000) + 1),0, Math.floor((Math.random() * 1000) + 1), 0, Math.floor((Math.random() * 1000) + 1), 2, 30, 400, 7, 7, 2000, 88, 900]
          }
        )
      }
      return result_datalist
    }
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif', Chart.defaults.global.defaultFontColor = "#292b2c";
var ctx = document.getElementById("myAreaChart"),
    myLineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
            datasets: fetchdata()
      },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: "date"
                    },
                    gridLines: {
                        display: !1
                    },
                    ticks: {
                        maxTicksLimit: 7
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 20e2,
                        maxTicksLimit: 8
                    },
                    gridLines: {
                        color: "rgba(0, 0, 0, .125)"
                    }
                }]
            },
            legend: {
                display: !1
            }
        }
    });


</script>
@endsection