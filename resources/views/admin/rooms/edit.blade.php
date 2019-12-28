@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m6 offset-m3 card-panel z-depth-4">
<h4 class="center grey-text">Room Details - {{ $host_name }}</h4>
@if(count($errors)>0)

<ul class="collection">
@foreach($errors->all() as $error)
<li class="collection-item red white-text ">
{{ $error }}
</li>
@endforeach
</ul>
@endif
<form action="{{ route('room.add') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="hidden" name="host_name" value="{{ $host_name }}">
    <input type="hidden" name="slug" value="{{ str_slug($host_name) }}">
  <div class="input-field">
    <input type="text" id="room" name="room" value="{{$id}}" >
    <label for="room">Room No.</label>
  </div>
  <div class="input-field">
          <input type="number" id="bed" name="bed" value="{{ old('bed') }}">
          <label for="bed">No. Of Bed:</label>
        </div>

            <div class="input-field">
              <input type="number" id="booked" name="booked" value="{{ old('booked') }}">
              <label for="booked">Total No. Of Booked Bed:</label>
            </div>

            <div class="input-field">
            <select name="room_type" id="room_type">


                <option value="AC">AC</option>
                <option value="Non AC">Non AC</option>
                <option value="Attached Bathroom">Attached Bathroom</option>

                </select>
            </div>
   <div class="file-field input-field">
      <div class="btn">
        <span>Upload</span>

      <input type="file" id="" name="img" value="{{ old('img') }}">

    </div>
    <div class="file-path-wrapper">
      <input type="text" class="file-path" value="{{ old('img') }}">

    </div>

    </div>
    <div class="input-field inline">
        <a class="btn-floating btn red">
            <i class="material-icons add">add</i>
          </a>
    </div>

<div class="input-field">



<div class="input-field center">
    <input type="submit" class="btn blue white-text" value="Submit">

</div>


</form>
</div>
</div>
@include('includes.floating')
@stop
