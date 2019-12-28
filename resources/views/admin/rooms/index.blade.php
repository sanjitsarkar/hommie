@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Rooms - {{ $host->name }}</h4>


        <div class="container ">


<div class="row">

    @for ($i = 1; $i < $host->total+1; $i++)
    <div class="col m2 l1 s3" style=" margin:10px 10px; ">
<a href="{{ route('room.edit',['hostel_name'=>str_slug($host->name),'id'=>$i])}}" class="btn orange white-text flow-text" style=" margin:0px 10px; display:block; text-align:center;">{{ $i }}</a>
    </div>
@endfor

</div>

</div>

</div>
</div>
@include('includes.floating');
@stop

