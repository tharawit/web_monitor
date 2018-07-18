@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')

<div id="show">
{{ $posts }}
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
var posts = {!! $posts !!};
var show = document.getElementById('#show');
show.innerHTML = posts[0];
// document.write(posts[0]['perma_link']);
console.log(posts);
</script>
@endsection