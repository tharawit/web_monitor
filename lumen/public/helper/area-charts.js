// Chart.defaults.global.defaultFontFamily='-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif',Chart.defaults.global.defaultFontColor="#292b2c";var ctx=document.getElementById("myAreaChart"),myLineChart=new Chart(ctx,{type:"line",data:{labels:["Mar 1","Mar 2","Mar 3","Mar 4","Mar 5","Mar 6","Mar 7","Mar 8","Mar 9","Mar 10","Mar 11","Mar 12","Mar 13"],datasets:[{label:"Sessions",lineTension:.3,backgroundColor:"rgba(2,117,216,0.2)",borderColor:"rgba(2,117,216,1)",pointRadius:5,pointBackgroundColor:"rgba(2,117,216,1)",pointBorderColor:"rgba(255,255,255,0.8)",pointHoverRadius:5,pointHoverBackgroundColor:"rgba(2,117,216,1)",pointHitRadius:20,pointBorderWidth:2,data:[1e4,30162,26263,18394,18287,28682,31274,33259,25849,24159,32651,31984,38451]}]},options:{scales:{xAxes:[{time:{unit:"date"},gridLines:{display:!1},ticks:{maxTicksLimit:7}}],yAxes:[{ticks:{min:0,max:4e4,maxTicksLimit:5},gridLines:{color:"rgba(0, 0, 0, .125)"}}]},legend:{display:!1}}}),ctx=document.getElementById("myBarChart"),myLineChart=new Chart(ctx,{type:"bar",data:{labels:["January","February","March","April","May","June"],datasets:[{label:"Revenue",backgroundColor:"rgba(2,117,216,1)",borderColor:"rgba(2,117,216,1)",data:[4215,5312,6251,7841,9821,14984]}]},options:{scales:{xAxes:[{time:{unit:"month"},gridLines:{display:!1},ticks:{maxTicksLimit:6}}],yAxes:[{ticks:{min:0,max:15e3,maxTicksLimit:5},gridLines:{display:!0}}]},legend:{display:!1}}}),ctx=document.getElementById("myPieChart"),myPieChart=new Chart(ctx,{type:"pie",data:{labels:["Blue","Red","Yellow","Green"],datasets:[{data:[12.21,15.58,11.25,8.32],backgroundColor:["#007bff","#dc3545","#ffc107","#28a745"]}]}});

graph_set_color = [
    // line 1 RED
    {
        backgroundColor: "rgba(232,32,80,0.2)",
        borderColor: "rgba(232,32,80,1)",
        pointBackgroundColor: "rgba(232,32,80)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverBackgroundColor: "rgba(232,32,80,1)",
    },
    // line 2 BLUE
    {
        backgroundColor: "rgba(94,70,242,0.2)",
        borderColor: "rgba(94,70,242,1)",
        pointBackgroundColor: "rgba(94,70,242)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverBackgroundColor: "rgba(94,70,242)",
    },
    // line 3 GREEN
    {
        backgroundColor: "rgba(70,242,118,0.2)",
        borderColor: "rgba(70,242,118,1)",
        pointBackgroundColor: "rgba(70,242,118)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverBackgroundColor: "rgba(70,242,118)",
    },
    // line 4 YALLOW
    {
        backgroundColor: "rgba(250,229,42,0.2)",
        borderColor: "rgba(250,229,42,1)",
        pointBackgroundColor: "rgba(250,229,42)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverBackgroundColor: "rgba(250,229,42)",
    },
    // line 5 PINK
    {
        backgroundColor: "rgba(225,116,237,0.2)",
        borderColor: "rgba(225,116,237,1)",
        pointBackgroundColor: "rgba(225,116,237)",
        pointBorderColor: "rgba(255,255,255,0.8)",
        pointHoverBackgroundColor: "rgba(225,116,237)",
    }
];
//fake data 
function fakeDataAreaChart(loopLimit){
    var result = [];
    for (var i = 0; i < loopLimit; i++){
        result = result.concat(
            Math.floor((Math.random() * 4000) + 1)
        );
    }
    return result;
}
/* extract data area chart */
function extractDataAreaChart(loopLimit, rawData){
    var result = [];
    var month = 12;
    for (var i = 0; i < month; i++){
        if(i < rawData.length) result = result.concat(rawData[i].total_post);
        else result = result.concat(0);
    }
    return result;
}

/* extract data Bar && Pie Chart */
function extractDataBarChart(loopLimit, rawData){
    var group_name = [];
    var group_member = [];
    var group_limit = 5;
    for(var index = 0; index < loopLimit; index++){
        group_name = group_name.concat(rawData[index][0].group_name);
        for (var i = rawData[index].length - 1; i > rawData[index].length - 2; i--){
            group_member = group_member.concat(rawData[index][i].total_member);
        }
    }
    return [group_name, group_member];
}
var barChartInfo = extractDataBarChart(5, graph_data);

// area chart
Chart.defaults.global.defaultFontFamily = '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif', Chart.defaults.global.defaultFontColor = "#292b2c";
var ctx = document.getElementById("myAreaChart"),
    myLineChart = new Chart(ctx, {
        type: "line",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "June", "July", "Aug", "Sept", "Oct", "Nov", "Dec"],
            // generate line detail
            datasets: function (){
                    var line_detail = [];
                    var line_limit = 5; // graph line limit config here !!!
                    for (var index = 0; index < line_limit; index++){
                        line_detail = line_detail.concat(
                            {
                                label: graph_data[index][0].group_name,
                                lineTension: .3,
                                backgroundColor: graph_set_color[index].backgroundColor,
                                borderColor: graph_set_color[index].borderColor,
                                pointRadius: 5,
                                pointBackgroundColor: graph_set_color[index].pointBackgroundColor,
                                pointBorderColor: graph_set_color[index].pointBorderColor,
                                pointHoverRadius: 5,
                                pointHoverBackgroundColor: graph_set_color[index].pointHoverBackgroundColor,
                                pointHitRadius: 20,
                                pointBorderWidth: 2,
                                // data: fakeDataAreaChart(12)
                                data: extractDataAreaChart(line_limit, graph_data[index])
                            }
                        )
                    }
                    return line_detail;
            }()
    },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: "date"
                    },
                    gridLines: {
                        display: 1
                    },
                    ticks: {
                        maxTicksLimit: 5
                    }
                }],
                // แก้เลข
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 2e3,
                        maxTicksLimit: 5
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
    }),
    ctx = document.getElementById("myBarChart"),
    myLineChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: barChartInfo[0],
            datasets: [
            {
                label: "Revenue",
                backgroundColor: [
                    "rgba(232,32,80,0.6)",
                    "rgba(94,70,242,0.6)",
                    "rgba(70,242,118,0.6)",
                    "rgba(250,229,42,0.6)",
                    "rgba(225,116,237,0.6)"
                ],
                borderColor:[
                    graph_set_color[0].borderColor,
                    graph_set_color[1].borderColor,
                    graph_set_color[2].borderColor,
                    graph_set_color[3].borderColor,
                    graph_set_color[4].borderColor
                ],
                data: barChartInfo[1]
            }
        ]
        },
        options: {
            scales: {
                xAxes: [{
                    time: {
                        unit: "user"
                    },
                    gridLines: {
                        display: !1
                    },
                    ticks: {
                        maxTicksLimit: 5
                    }
                }],
                yAxes: [{
                    ticks: {
                        min: 0,
                        max: 60e4,
                        maxTicksLimit: 10
                    },
                    gridLines: {
                        display: 1
                    }
                }]
            },
            legend: {
                display: 0
            }
        }
    }),
    ctx = document.getElementById("myPieChart"),
    myPieChart = new Chart(ctx, {
        type: "doughnut",
        data: {
            labels: barChartInfo[0],
            datasets: [{
                data: barChartInfo[1],
                backgroundColor: [
                    "rgba(232,32,80,0.6)",
                    "rgba(94,70,242,0.6)",
                    "rgba(70,242,118,0.6)",
                    "rgba(250,229,42,0.6)",
                    "rgba(225,116,237,0.6)"
                ]
            }]
        },
        options: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 60e4,
                    maxTicksLimit: 5
                },
                gridLines: {
                    display: 1
                }
            }]
        }
    });

// menu testing
function genMenu(){
    var menuStr = "";
    for(var i = 0; i < barChartInfo[0].length; i++){
        menuStr += "<a href='http://localhost:8000/lookup/" + barChartInfo[0][i] + "'>" + barChartInfo[0][i] + "</a>&emsp;"
    }
    document.getElementById("menu").innerHTML = menuStr; 
}
genMenu();

 