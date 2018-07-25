/* card box  */
var lookupListStyle = "<style>" +
".card-list-shadow{border: 1px solid #BFBFBF; box-shadow: 5px 5px 5px #aaaaaa;} " +
".card-list-shadow:hover{width:170px;} " +
"</style>"
var allList = ""
for(var index in box_group_list){
    allList = allList +
"<div style='margin-right:40px;'>" +
"<div class='card card-list-shadow' style='width:150px;'>" + 
    "<a href='http://demo.ninjari.ninja:8000/lookup/"+ box_group_list[index].group_id +"'" +
        " alt='"+ box_group_list[index].group_name +"'>" +
        "<img class='card-img-top' src='https://graph.facebook.com/"+ box_group_list[index].group_id +
        "/picture?type=large'>" +
    "</a>" +
"</div></div>"
}
document.getElementById('box-lists').innerHTML = lookupListStyle + allList


// menu testing
/* function genMenu(){
    var menuStr = "";
    for(var i = 0; i < barChartInfo[0].length; i++){
        menuStr += "<a href='http://demo.ninjari.ninja:8000/lookup/" + barChartInfo[0][i] + "'>" + barChartInfo[0][i] + "</a>&emsp;"
    }
    document.getElementById("menu").innerHTML = menuStr; 
}
genMenu(); */
