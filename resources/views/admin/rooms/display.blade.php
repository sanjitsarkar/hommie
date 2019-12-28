@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Rooms {{ $host }}</h4>
    <table class="stripped responsive-table show-on-large">
        <thead>
            <tr>
                <th>Room No:</th>
                <th>Total Bed</th>
                <th>Booked Bed</th>
                <th>Room Type:</th>
                <th>Image</th>
                <th>Edit</th>


            </tr>
        </thead>
        <tbody>
                @foreach($rooms as $room)
<tr>


    <td>{{ $room->room_no }}</td>
    <td>{{ $room->total_bed }}</td>
    <td><a href="{{ route('bed.index',['hostel_name'=>str_slug($host),'id'=>$room->room_no])}}" >{{ $room->booked_bed }}</a></td>
    <td>{{ $room->room_type }}</td>
    <td> <img src="{{ asset($room->img) }}" alt="" width="50px" height="50px"> </td>

    <td><a href="{{ route('room.edit',['hostel_name'=>str_slug($host),'id'=>$room->room_no])}}" > <i class="material-icons">edit</i> </a></td>


</tr>
@endforeach
        </tbody>
    </table>
</div>
</div>
@include('includes.floating')
@stop

