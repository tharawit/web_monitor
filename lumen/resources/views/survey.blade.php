@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<div class="container" style="margin-top:30px;margin-left:100px;">
    <div><h3>Your following lists</h3><div>
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
    `<div style="width:500px;hegith:300px; border:2px solid #000; border-radius:5px;margin 10px 10px 10px 10px;">` +
    `<p><a href="`+ posts[i][0]['perma_link'] +`" target="_blank">` +
    `<b>` + posts[i][0]['detail'] + `</b></a></p>` +
    `<p> engagement : ` + posts[i][0]['engagement'] +
    `&emsp;comment : ` + posts[i][0]['comment'] +
    `&emsp;shared : ` + posts[i][0]['shared'] + `</p>` +
    `<input name="post_id" type="hidden" value="`+ posts[i][0]['post_id'] +`">` +
    `<button type="submit" >Unfollow</button>` +
    `</form></div><br>`
}
show.innerHTML = comment
</script>
@endsection
