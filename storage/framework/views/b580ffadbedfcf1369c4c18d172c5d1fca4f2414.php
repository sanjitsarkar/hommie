<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="<?php echo e(asset('app/css/icon.css')); ?>" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href=" <?php echo e(asset('app/css/materialize.min.css')); ?>" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="<?php echo e(asset('app/css/main.css')); ?>" />

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Custom Materialize Theme</title>
</head>

<body class="grey lighten-4">
  <nav class="blue darken-2">
    <div class="container">
      <div class="nav-wrapper">
        <a href="<?php echo e(route('home')); ?>" class="brand-logo">Hommie</a>
        <a href="#" data-activates="side-nav" class="button-collapse show-on-large right">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
                </li>
                <li class="nav-item">
                    <?php if(Route::has('register')): ?>
                        <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                    <?php endif; ?>
                </li>
            <?php else: ?>
          <li class="active">
            <a href="<?php echo e(route('home')); ?>">Dashboard</a>
          </li>
          <li>
            <a href="<?php echo e(route('hostel.index')); ?>">Hostels</a>
          </li>
          <li>
            <a href="categories.html">Location</a>
          </li>
          <li>
            <a href="comments.html">Booked Users</a>
          </li>
          <li>
            <a href="users.html">Admin Users</a>
          </li>
          <?php endif; ?>
        </ul>
        <!-- Side nav -->
        <ul id="side-nav" class="side-nav">
          <li>
            <div class="user-view">
              <div class="background">
                <img src="<?php echo e(asset('app/img/ocean.jpg')); ?>" alt="">
              </div>
              <a href="#">
                <img src="<?php echo e(asset('app/uploads/users/person1.jpg')); ?>"" alt="" class="circle">
              </a>
              <?php if(Auth::user()): ?>
              <a href="#">
                <span class="name white-text"><?php echo e(Auth::user()->name); ?></span>
              </a>
              <a href="#">

                <span class="email white-text"><?php echo e(Auth::user()->email); ?></span>

              </a>
            </div>
          </li>
          <li>
            <a href="index.html">
              <i class="material-icons">dashboard</i> Dashboard</a>
          </li>
          <li>
            <a href="<?php echo e(route('hostel.index')); ?>">Hostels</a>
          </li>
          <li>
            <a href="categories.html">Location</a>
          </li>
          <li>
            <a href="comments.html">Booked Users</a>
          </li>
          <li>
            <a href="users.html">Admin Users</a>
          </li>
          <li>
            <div class="divider"></div>
          </li>
          <li>
            <a class="subheader">Account Controls</a>
          </li>
          <li>
          <a class="dropdown-item waves-effect" href="<?php echo e(route('logout')); ?>"
          onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
           <?php echo e(__('Logout')); ?>

       </a>

       <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
           <?php echo csrf_field(); ?>
       </form>


          </li>
          <?php else: ?>
          <?php if(auth()->guard()->guest()): ?>
          <li >
              <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
          </li>
          <li class="nav-item">
              <?php if(Route::has('register')): ?>
                  <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
              <?php endif; ?>
          </li>
          <?php endif; ?>

<?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <?php echo $__env->yieldContent('content'); ?>
  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="<?php echo e(asset('app/js/materialize.min.js')); ?>"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
  <script src="<?php echo e(asset('app/js/chart.js')); ?>"></script>

  <script>
    // Hide Sections
    $('.section').hide();

    setTimeout(function () {
      $(document).ready(function () {
        // Show sections
        $('.section').fadeIn();

        // Hide preloader
        $('.loader').fadeOut();

        //Init Side nav
        $('.button-collapse').sideNav();

        // Init Modal
        $('.modal').modal();

        // Init Select
        $('select').material_select();
        $('.datepicker').pickadate(
            {
            selectMonths:true,
            closeOnSelect:true,
            format: 'yyyy-mm-dd'
            }
        );

        // Counter
        $('.count').each(function () {
          $(this).prop('Counter', 0).animate({
            Counter: $(this).text()
          }, {
              duration: 1000,
              easing: 'swing',
              step: function (now) {
                $(this).text(Math.ceil(now));
              }
            });
        });

        // Comments - Approve & Deny
        $('.approve').click(function (e) {
          Materialize.toast('Comment Approved', 3000);
          e.preventDefault();
        });
        $('.deny').click(function (e) {
          Materialize.toast('Comment Denied', 3000);
          e.preventDefault();
        });

        // Quick Todos
        $('#todo-form').submit(function (e) {
          const output = `<li class="collection-item">
                <div>${$('#todo').val()}
                  <a href="#!" class="secondary-content delete">
                    <i class="material-icons">close</i>
                  </a>
                </div>
              </li>`;

          $('.todos').append(output);

          Materialize.toast('Todo Added', 3000);

          e.preventDefault();
        });

        // Delete Todos
        $('.todos').on('click', '.delete', function (e) {
          $(this).parent().parent().remove();
          Materialize.toast('Todo Removed', 3000);

          e.preventDefault();
        });

        CKEDITOR.replace('body');

      });
    }, 1000);
  </script>
  <script>

    <?php if(Session::has('info')): ?>


   Materialize.toast("<?php echo e(Session::get('info')); ?>", 3000);

    <?php endif; ?>
  </script>
</body>

</html>
