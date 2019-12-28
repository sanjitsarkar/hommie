<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Dream PG</title>
  <link rel="stylesheet" href="{{ asset('assets/css/icon.css') }}">
  <link type="text/css" rel="stylesheet" href="{{  asset('assets/css/materialize.min.css')}}" media="screen,projection" />

  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/jquery.modal.css') }}">

  <link rel="stylesheet" href="{{ asset('assets/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome/css/font-awesome.min.css') }}">

  <style>



  </style>

</head>

<body>

  <header class="header">
    <div class="navbar-fixed">
      <nav class="top-nav">
        <div class="container">
          <div class="nav-wrapper top">

            <ul class="right hide-on-med-and-down">
              <li><a href="#modal1" class="btn acc modal-trigger waves-effect waves-light">Account</a></li>

            </ul>
            <a href="#" class="brand-logo">HOMMIE</a>
          <a class="button-collapse" data-activates="mobile-nav" href="#">
          <i class="material-icons">menu</i>
        </a>



          </div>
        </div>
      </nav>

    </div>
    {{--  <header class="header">
      <div class="navbar-fixed">
        <nav class="bottom-nav">
          <div class="container">
            <div class="nav-wrapper">

              <ul class="left hide-on-med-and-down ">
                <li><a href="" class="city-list">Guwahati</a></li>
                <li><a href="" class="city-list">Silchar</a></li>
                <li><a href="" class="city-list">Tezpur</a></li>
                <li><a href="" class="city-list">Dibrugarh</a></li>
                <li><a href="" class="city-list">Jorhat</a></li>
              </ul>
              </ul>
            </div>
          </div>
        </nav>

      </div>
    </header>  --}}
    <section class="section section-search white-text center-align">

            <div class="container">
              <div class="row">
                <div class="col s12 m12">

                  <form action="/search" method="GET">
                    <div class="input-field inline">
                      <input type="text" class="grey-text autocomplete search-item" name="query" placeholder="City,College,Hostel,PG.."
                        id="autocomplete-input">
                    </div>
                    <div class="input-field inline">
                      <input type="text" class="datepicker z-depth-4" id="date" name="date">
                      <label for="date">Check-In Date</label>
                    </div>
                    <div class="select-group">
                    <div class="input-field inline slct">
                        <select name="rooms" id="rooms" class="">
                          <option value="1" disabled selected>One</option>
                          <option value="2">Two</option>
                          <option value="3">Three</option>
                          <option value="4">Four</option>
                        </select>
                        <label for="rooms">Select Rooms</label>
                        </div>
                    <div class="input-field inline slct">
                      <select name="room-type" id="room-type">

                        <option value="AC">AC</option>
                        <option value="Non AC">Non AC</option>
                        <option value="Attached Bathroom">Attached Bathroom</option>
                      </select>
                      <label for="room-type">Select Room-Type</label>
                    </div>
                  </div>
                    <div class="input-field inline ">
                      <button class="btn search btn-large "><i class=" srch material-icons left">search</i></button>

                    </div>
                  </form>
                </div>
              </div>
            </div>
          </section>

<section class="results">

    @if($search=="")

        <h6 class="white-text center">{{ $res }}</h6>


    @else
        <h5 class="white-text center">Search Results For: {{ $search }}</h5>
        @if($hosts->count()>1)

        <h6 class="white-text center">{{ $hosts->count()}} Hostels Found</h6>
@if($hosts->count()==1)
<h6 class="white-text center">{{ $hosts->count()}} Hostel Found</h6>
@endif
        @endif
    <div class="container">

<div class="row">

    @if($hosts->count()>0)
    @foreach($hosts as $host)
    <div class="col m4 s12">


<div class="card accent" href="{{ route('home') }}">
<div class="card-image">
  <img src="{{ asset($host->img)}}" alt="" class="responsive-image">
    <div class="card-title  primary-text"><b>{{ $host->name}}</b></div>
</div>

    <div class="card-content secondary white-text">
        <h4 class=""> <i class="material-icons  accent-text">location_on</i> {{ $host->location }} </h4>
<h5 class="small accent-text"><i class="material-icons accent-text">school</i> {{ $host->college }} </h5>
        <p>{{ $host->desc }}</p>
    </div>


<div class="card-action">

    <a href="" class="btn-floating primary">
        <i class="material-icons primary-text">favorite_border</i>
    </a>
    <a href="{{ route('hostel.book',['name'=>$host->slug]) }}" class="btn right primary">Book Room</a>


    </div>
</div>
</div>
@endforeach
@else
<h6 class="white-text center">No Hostels Found :)</h5>
@endif
@endif
</div>
    </div>
</section>

    <footer class="page-footer grey darken-3">
        <div class="container">
          <div class="row">
            <div class="col s12 m6">
              <h5 class="grey-text text-lighten-3">About Us</h5>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit magnam illo, dolores maiores doloribus.</p>
            </div>
            <div class="col s12 m4 offset-m2">
              <h5 class="grey-text text-lighten-3">Social Links</h5>

              <ul>
                <li><a href=""> <i class="fa fa-facebook"></i> </a></li>
                <li><a href=""><i class="fa fa-youtube"></i> </a></li>
                <li><a href=""><i class="fa fa-twitter"></i> </a></li>
                <li><a href=""><i class="fa fa-pinterest"></i> </a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright grey darken-2">
          <div class="container">
            Copyright &copy; 2018
            <a href="" class="grey-text text-lighten-3 right">Terms & Conditions</a>
          </div>
        </div>
      </footer>

</body>


<!-- <script src=" assets/js/bootstrap.min.js"> </script> -->
<script src="{{ asset('assets/js/jquery.modal.js') }}"></script>
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/materialize.min.js') }}"> </script>
<!-- <script src="assets/js/popper.min.js"></script> -->
<script>

    $(document).ready(function () {

        $('.slider').slider({
          indicators: true,
          height: 500,
          transition: 500,
          interval: 6000
        });


        $('select').material_select();
        $('.datepicker').pickadate(
          {
    selectMonths: true,
    closeOnSelect:true
          }
        );
      });

      var date = document.querySelector('#date');
      var dt = new Date();
      var dts = dt.getDate();
      var months = dt.getUTCMonth()+1;
      switch(months)
      {
        case 1:
        months = "January";
        break;
        case 2:
        months = "February";
        break;
        case 3:
        months = "March";
        break;
        case 4:
        months = "April";
        break;
        case 5:
        months = "May";
        break;
        case 6:
        months = "June";
        break;
        case 7:
        months = "July";
        break;
        case 8:
        months = "August";
        break;
        case 9:
        months = "September";
        break;
        case 10:
        months = "October";
        break;
        case 11:
        months = "November";
        break;
        case 12:
        months = "December";
        break;
      }
      var year = dt.getFullYear();
      date.value = `${dts} ${months}, ${year}`;
    $('.modal').modal();



  </script>

</html>
