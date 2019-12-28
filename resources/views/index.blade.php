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
    <header class="header">
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
    </header>

    <section class="slider">
        <div class="modal modal-fixed-footer" id="modal1">

            <div class="modal-content">

              <div class="row">

                <div class="col s12">
                  <ul class="tabs">
                  <li class="tab col s6">
                    <a href="#login" class="btn btn-flat login-tab waves-effect waves-light">LOGIN</a>
                  </li>
                  <li class="tab col s6">
                      <a href="#signup" class="btn btn-flat signup-tab waves-effect waves-light">SIGNUP</a>
                    </li>
                  </ul>
                </div>


    <div class="login col s12" id="login">

        <form action="">
          <div class="input-field">
              <label for="user">Username</label>
            <input type="text" id="user" class="user" placeholder="Email/Phone Number">

          </div>
          <div class="input-field">
              <label for="pass" >Password</label>
            <input type="password" id="pass" placeholder="Password">

          </div>
          <div class="input-field center">
            <input type="submit" id="login" class="btn login center-align" value="LOGIN">

          </div>
        </form>

    </div>
    <div class="signup col s12" id="signup">

        <form action="">
            <div class="input-field">
                <input type="text" id="user" class="user" placeholder="Full Name">
                <label for="user">Full Name</label>
              </div>
          <div class="input-field">
            <input type="text" id="user" class="user" placeholder="Email/Phone Number">
            <label for="user">Username</label>
          </div>
          <div class="input-field">
            <input type="password" id="pass" placeholder="Password">
            <label for="pass" >Password</label>
          </div>
          <div class="input-field">
              <input type="password" id="cpass" placeholder="Confirm Password">
              <label for="cpass" >Confirm Password</label>
            </div>
          <div class="input-field center">
            <input type="submit" id="user" class="btn center-align signup" value="SIGNUP">

          </div>
        </form>

    </div>

  </div>
            </div>
            <div class="modal-footer">
              <a href="" class="modal-action modal-close waves-effect waves-light">
                <i class="material-icons">close</i>
              </a>
            </div>

          </div>

      <ul class="slides">
        <li>
          <img src="{{ asset('assets/img/apartment-bed-bedroom-271624.jpg') }}" alt="">
          <div class="caption center-align">
            <h3>Top Rated Hotels</h2>
              <h5 class="white-text hide-on-small-only light text-lighten-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum, ab!
              </h5>
              <a href="#" class="btn act  waves-effect waves-light">Learn More</a>
          </div>
        </li>
        <li>
          <img src="{{ asset('assets/img/apartment-bed-bedroom-271672.jpg') }}" alt="">
          <div class="caption right-align">
            <h3>10% Discount on first time booking.</h2>
              <h5 class="white-text hide-on-small-only light text-lighten-3">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Itaque, eos.
              </h5>
              <a href="#" class="btn act waves-effect waves-light ">Learn More</a>
          </div>
        </li>
        <li>
          <img src="{{ asset('assets/img/apartment-chair-comfort-271614.jpg') }}" alt="">
          <div class="caption left-align">
            <h3>Lorem ipsum dolor sit amet.</h2>
              <h5 class="white-text hide-on-small-only light text-lighten-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                quidem rem animi sed cupiditate maiores?
              </h5>
              <a href="#" class="btn act waves-effect waves-light ">Learn More</a>
          </div>
        </li>
        <li>
          <img src="{{ asset('assets/img/bed-bedroom-comfort-1148927.jpg') }}" alt="">
          <div class="caption right-align">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
              <h5 class="white-text hide-on-small-only light text-lighten-3">
                Lorem ipsum dolor, sit amet consectetur fugiat aperiam ipsa facere distinctio.
              </h5>
              <a href="#" class="btn act waves-effect waves-light">Learn More</a>
          </div>
        </li>
        <li>
          <img src="{{ asset('assets/img/bed-bedroom-hostel-4217.jpg') }}" alt="">
          <div class="caption center-align">
            <h3>Lorem ipsum dolor sit amet.</h2>
              <h5 class="white-text hide-on-small-only light text-lighten-3">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
              </h5>
              <a href="#" class="btn act ">Learn More</a>
          </div>
        </li>
      </ul>

    </section>

    <section class="section section-search white-text center-align">

      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <h3 class="center-align">Search Your Hostel</h3>
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
    <section class="top-hotels">
      <div class="container">

        <div class="row">
          <h3 class="center white-text">Popular Hostels</h3>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/bed-bedroom-cozy-164595.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/bed-bedroom-comfort-1148927.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">

                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/bedroom-door-entrance-271639.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/apartment-chair-comfort-271614.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">

                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>


                </div>
              </div>
            </div>

          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/apartment-bed-bedroom-271624.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">

                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <div class="col s12 m4">
            <div class="card">
              <div class="card-image">
                <img src="assets/img/apartment-bed-bedroom-271624.jpg" alt="" class="responsive-img">
                <span class="card-title">Lorem, ipsum dolor.</span>
              </div>
              <div class="card-body">
                <div class="card-content">
                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non, aspernatur?</p>
                  <div class="rating">
                      <i class="material-icons">star</i>

                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                      <i class="material-icons">star</i>
                  </div>
                </div>
              </div>
            </div>

          </div>
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
