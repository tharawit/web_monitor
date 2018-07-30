@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<style>
.box-shadow{border: 1px solid #BFBFBF; box-shadow: 5px 5px 5px #aaaaaa;} 
</style>
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
    `<div class="box-shadow" style=" `+
        `width:500px;` +
        `hegith:300px;` +
        `color:#151515;` +
        `background: #e9ebee;` +
        `border:1px solid #cdcdcd;` +
        `border-radius:5px;` +
        `padding: 10px 10px 10px 10px;`+
    `">` +
    `<p><a style="color:#1d2134; text-decoration: none;" href="`+ posts[index]['perma_link'] +`" target="_blank">` +
    `<b>` + posts[index]['detail'] + `</b></a></p>` +
    `<p><i class="fa fa-fw fa-thumbs-up"></i>` + posts[index]['engagement'] +
    `&emsp;<i class="fa fa-fw fa-comments"></i> ` + posts[index]['comment'] +
    `&emsp;<i class="fa fa-fw fa-share-alt"></i> ` + posts[index]['shared'] + `</p>` +
    `<input name="post_id" type="hidden" value="`+ posts[index]['post_id'] +`">` +
    `<input name="email" type="hidden" value="`+ fb_email +`">` +
    `<button type="submit" class="btn btn-primary">Follow</button>` +
    `</form></div><br>`
}
showAllComment.innerHTML = comment
</script>
@endsection
