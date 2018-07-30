@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<div class="container" style="margin-top:30px;margin-left:100px;">
<div id="showAllCommentTopic">
</div>
<div id="showAllComment">

</div>
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
var posts = {!! $posts !!}
var fb_email = '{!! $fb_mail !!}'
document.getElementById('showAllCommentTopic').innerHTML = `<h2>` + posts[0]['group_name'] + `</h2>`
var showAllComment = document.getElementById('showAllComment')
var comment = ""
for(index in posts) { 
    /* create comment box*/
    comment = comment + 
    `<form action="/add/monitor" method="post">` +
    `<div style="width:500px;hegith:300px; border:2px solid #000; border-radius:5px;">` +
    `<p><a href="`+ posts[index]['perma_link'] +`" target="_blank">` +
    `<b>` + posts[index]['detail'] + `</b></a></p>` +
    `<p> engagement : ` + posts[index]['engagement'] +
    `&emsp;comment : ` + posts[index]['comment'] +
    `&emsp;shared : ` + posts[index]['shared'] + `</p>` +
    `<input name="post_id" type="hidden" value="`+ posts[index]['post_id'] +`">` +
    `<input name="email" type="hidden" value="`+ fb_email +`">` +
    `<button type="submit" >Follow</button>` +
    `</form></div><br>`
}
showAllComment.innerHTML = comment
</script>
@endsection
