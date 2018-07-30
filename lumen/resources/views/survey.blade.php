@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<style>
.box-shadow{border: 1px solid #BFBFBF; box-shadow: 5px 5px 5px #aaaaaa;}
</style>
<div class="container" style="margin-top:30px;margin-left:100px;">
    <div><h3>Following lists</h3><div>
    <div id="showMonitor"></div>
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
var posts = {!! $data !!}
var show = document.getElementById('showMonitor')
var comment = ""
for(var i = 0; i < posts.length; i++){
    comment = comment + 
    `<form action="/del/monitor" method="post">` +
    `<div class="box-shadow" style=" `+
        `width:500px;` +
        `hegith:300px;` +
        `color:#151515;` +
        `background: #e9ebee;` +
        `border:1px solid #cdcdcd;` +
        `border-radius:5px;` +
        `padding: 10px 10px 10px 10px;`+
    `">` +
    `<p><a style="color:#1d2134; text-decoration: none;" href="`+ posts[i][0]['perma_link'] +`" target="_blank">` +
    `<b>` + posts[i][0]['detail'] + `</b></a></p>` +
    `<p><i class="fa fa-fw fa-thumbs-up"></i>` + posts[i][0]['engagement'] +
    `&emsp;<i class="fa fa-fw fa-comments"></i> ` + posts[i][0]['comment'] +
    `&emsp;<i class="fa fa-fw fa-share-alt"></i> ` + posts[i][0]['shared'] + `</p>` +
    `<input name="post_id" type="hidden" value="`+ posts[i][0]['post_id'] +`">` +
    `<button class="btn btn-danger"type="submit">Unfollow</button>` +
    `</form></div><br>`
}
show.innerHTML = comment
</script>
@endsection
