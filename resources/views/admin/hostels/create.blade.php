@extends('layouts.app')
@section('content')
<div class="row">
<div class="col s12 m6 offset-m3 card-panel z-depth-4">
<h4 class="center grey-text">Add Hostel</h4>
@if(count($errors)>0)

<ul class="collection">
@foreach($errors->all() as $error)
<li class="collection-item red white-text ">
{{ $error }}
</li>

@endforeach
</ul>
@endif
<form action="{{ route('hostel.add') }}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
  <div class="input-field">
    <input type="text" id="title" name="name" value="{{ old('name') }}">
    <label for="title">Name</label>
  </div>
  <div class="input-field">
          <input type="text" id="location" name="location" value="{{ old('location') }}">
          <label for="location">Location</label>
        </div>
  <div class="input-field">
              <input type="text" id="near" name="college" value="{{ old('college') }}">
              <label for="near">Nearest College</label>
            </div>
            <div class="input-field">
              <input type="number" id="near" name="total" value="{{ old('total') }}">
              <label for="near">Total Rooms</label>
            </div>


  <div class="input-field">
    <textarea name="desc" id="desc" class="materialize-textarea">{{ old('desc') }}</textarea>
    <label for="desc">Description</label>
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


<div class="modal-footer">

<div class="input-field center">
    <input type="submit" class="btn blue white-text" value="Submit">

</div>


</form>
</div>
</div>
@include('includes.floating')
@stop

