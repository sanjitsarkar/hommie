@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Hostels</h4>
    <table class="stripped responsive-table show-on-large">
            @if($hostels->count()>0)
        <thead>
            <tr>
                <th>Name</th>
                <th>Rooms</th>
                <th>Location</th>
                <th>Nearest College</th>
                <th>Image</th>
                <th>Description</th>
                <th class="hide-on-small-and-down">Edit</th>
                <th class="hide-on-small-and-down">Delete</th>

            </tr>
        </thead>
        <tbody>

                @foreach($hostels as $host)
<tr>


    <td> <a href="{{ route('room.index',['id'=>$host->id]) }}"> {{ $host->name }}</a></td>
    <td><a href="{{ route('room.display',['host'=>$host->name]) }}" class="btn blue white-text btn-floating">{{ $host->total }}</a></td>
    <td>{{ $host->location }}</td>
    <td>{{ $host->college }}</td>
    <td> <img src="{{ asset($host->img) }}" alt="" width="50px" height="50px"> </td>
    <td>{{ $host->desc }}</td>
    <td><a href="{{  route('hostel.edit',['id'=>$host->id])}}" > <i class="material-icons">edit</i> </a></td>
    <td><a href="{{  route('hostel.delete',['id'=>$host->id])}}"> <i class="material-icons">delete</i> </a></td>

</tr>
@endforeach

        </tbody>
        @else
<h5 class="center grey-text text-darken-1">No Hostel Added :(</h1>
  <h4 class="center"> <a href="{{ route('hostel.create') }}" class="btn green btn-floating center">
        <i class="material-icons ">add</i>
    </a>
</h4>
@endif
    </table>
</div>
</div>
@include('includes.floating')
@stop

