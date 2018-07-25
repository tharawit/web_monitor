@extends('layouts.app2')
@section('title', 'Lookup')
@section('content')
<style>
.border-pic {
    transition: 1s;
    width: 150px;
    height: 150px;
}
.border-pic:hover {
    transform: scale(0.9);
}
.border-pic:active {
    transform: scale(1.2);
}
</style>
<div class="container" style="padding: 30px;">
<div class="row">
    <div class="col-xs-12 col-md-6">
        <center>
        <div>
            <img class="img-responsive rounded-circle border-pic" src="https://graph.facebook.com/{{ $_SESSION['fb_id'] }}/picture?type=large">
            <br>
        </div>
        <div style="margin-top:10px;">
            <h2>{{ $_SESSION['fb_name'] }}</h2>
            <h3>({{ $_SESSION['fb_status'] }})</h3>
            <h3>{{ $_SESSION['fb_email']}}</h3>
        </div>
    </center>
    </div>
    <div class="col-xs-12 col-md-6" style="border-left: 3px solid #3d3d3d;">
    </div>
</div>
</div>
@endsection
@section('graph_controller')
<script type="text/javascript">
</script>
@endsection
