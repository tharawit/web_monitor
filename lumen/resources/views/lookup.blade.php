@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<div style="margin-top:10px;margin-left:20px;">
<div id="showAllCommentTopic">
</div>
<div id="showAllComment">

</div>
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
var posts = {!! $posts !!}
document.getElementById('showAllCommentTopic').innerHTML = `<h2>` + posts[0]['group_name'] + `</h2>`
var showAllComment = document.getElementById('showAllComment')
var comment = ""
for(index in posts) { 
    /* create comment box*/
    comment = comment + 
    `<div style="width:500px;hegith:300px; border:2px solid #000; border-radius:5px;">` +
    `<p><a href="`+ posts[index]['perma_link'] +`" target="_blank">` +
    `<b>` + posts[index]['detail'] + `</b></a></p>` +
    `<p> engagement : ` + posts[index]['engagement'] +
    `&emsp;comment : ` + posts[index]['comment'] +
    `&emsp;shared : ` + posts[index]['shared'] + `</p>` +
    `</div><br>`
}
showAllComment.innerHTML = comment
</script>
@endsection