@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m8 offset-m2 card-panel z-depth-4">
<h4 class="grey-text center">Booked Beds: {{ $host->name }} : {{ $room_no }}</h4>
    <table class="stripped responsive-table show-on-large">
        <thead>
            <tr>
                <th>Bed No.</th>
                <th>Name</th>
                <th>Check-In Date</th>
                <th>Check-Out Date</th>
                <th>College</th>
                <th>Stream</th>
                <th>Branch</th>
                <th>Semester</th>
                <th>Age</th>

                <th>Image</th>
                <th>Edit</th>
                <th>Delete</th>


            </tr>
        </thead>
        <tbody>
                @foreach($beds as $bed)
<tr>

        <td>{{ $bed->bed_no }}</td>
    <td>{{ $bed->student_name }}</td>
    <td>{{ $bed->check_in_date }}</td>
    <td>{{ $bed->check_out_date}}</td>
    <td>{{ $bed->college_name}}</td>
    <td>{{ $bed->stream }}</td>
    <td>{{ $bed->branch }}</td>
    <td>{{ $bed->sem }}</td>
    <td>{{ $bed->age }}</td>

    <td> <img src="{{ asset($bed->img) }}" alt="" width="50px" height="50px"> </td>
    <td><a href="{{ route('bed.edit',['hostel_name'=>$host->slug,'id'=>$room_no,'bed_no'=>$bed->bed_no]) }}" ><i class="material-icons">edit</a></td>

    <td><a href="{{ route('bed.delete',['hostel_name'=>$host->slug,'id'=>$room_no,'bed_no'=>$bed->bed_no]) }}" > <i class="material-icons">delete</i> </a></td>


</tr>
@endforeach
        </tbody>
    </table>
</div>
</div>
@include('includes.floating')
@stop

