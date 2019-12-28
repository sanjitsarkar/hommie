@extends('layouts.app')

@section('content')
<!-- Section: Stats -->
  <section class="section section-stats center">
    <div class="row">
      <div class="col s12 m6 l3">
        <div class="card-panel blue lighten-1 white-text center">
          <i class="material-icons medium">home</i>
          <h5>Hostels</h5>


              @if($host->count()>0)

              <a href="{{ route('hostel.index') }}" class="btn-floating blue count">
                {{ $host->count() }}





        </a>
            @else

                    <a href="{{ route('hostel.create') }}" class="btn-floating blue">
                            <i class="material-icons">home</i>
                          </a>


            @endif
          <div class="progress grey lighten-1">
            <div class="indeterminate white"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel center">
          <i class="material-icons medium">group</i>
          <h5>Booked Users</h5>
          <a  class="btn-floating white black-text  count">0</a>
          <div class="progress grey lighten-1">
            <div class="indeterminate blue lighten-1"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel blue lighten-1 white-text center">
          <i class="material-icons medium">map</i>
          <h5>Locations</h5>
          <a class="btn-floating blue count">0</a>
          <div class="progress grey lighten-1">
            <div class="indeterminate white"></div>
          </div>
        </div>
      </div>
      <div class="col s12 m6 l3">
        <div class="card-panel center">
          <i class="material-icons medium">supervisor_account</i>
          <h5>Users</h5>
          <a class="btn-floating white black-text count">0</a>
          <div class="progress grey lighten-1">
            <div class="indeterminate blue lighten-1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>





  <!-- Add Category Modal -->
  <div id="category-modal" class="modal">
    <div class="modal-content">
      <h4>Add Category</h4>
      <form>
        <div class="input-field">
          <input type="text" id="title">
          <label for="title">Title</label>
        </div>
      </form>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
      </div>
    </div>
  </div>

  <!-- Add User Modal -->
  <div id="user-modal" class="modal">
    <div class="modal-content">
      <h4>Add User</h4>
      <form>
        <div class="input-field">
          <input type="text" id="name">
          <label for="name">Name</label>
        </div>
        <div class="input-field">
          <input type="email" id="email">
          <label for="email">Email</label>
        </div>
        <div class="input-field">
          <input type="password" id="password">
          <label for="password">Password</label>
        </div>
        <div class="input-field">
          <input type="password" id="password2">
          <label for="password2">Confirm Password</label>
        </div>
      </form>
      <div class="modal-footer">
        <a href="#!" class="modal-action modal-close btn blue white-text">Submit</a>
      </div>
    </div>
  </div>


  <!-- Preloader -->
  <div class="loader preloader-wrapper big active">
    <div class="spinner-layer spinner-blue-only">
      <div class="circle-clipper left">
        <div class="circle"></div>
      </div>
      <div class="gap-patch">
        <div class="circle"></div>
      </div>
      <div class="circle-clipper right">
        <div class="circle"></div>
      </div>
    </div>
  </div>

@endsection
