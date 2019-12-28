<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dream PG</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/icon.css')); ?>">
    <link type="text/css" rel="stylesheet" href="<?php echo e(asset('assets/css/materialize.min.css')); ?>" media="screen,projection" />

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/main.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/jquery.modal.css')); ?>">

    <link rel="stylesheet" href="<?php echo e(asset('assets/css/normalize.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/fonts/font-awesome/css/font-awesome.min.css')); ?>">

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
                                <li class="right"> <input type="text" name="" id=""></li>
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


        <section class="hostel grey lighten-3">
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
                <div class="divider">

                    </div>





                <div class="row">

                        <div class="col side-left s12 m3  z-depth-0 ">


                                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, similique magnam! Temporibus quas enim et est impedit, animi consequatur dignissimos facilis quo ipsa amet exercitationem nemo sapiente blanditiis ab eos voluptatibus vitae quasi nulla nostrum veritatis? Sint officia saepe voluptates repellat fuga facilis, voluptate, earum unde voluptas rerum velit ipsa.</p>
                                    </div>

                    <div class="col s12 m6 middle card-panel z-depth-0 ">
                        <h4 class="grey-text center"><?php echo e($host->name); ?></h4>







                                <div class="card accent" href="<?php echo e(route('home')); ?>">
                                    <div class="card-image">
                                        <img src="<?php echo e(asset($host->img)); ?>" alt="" class="responsive-image">
                                        <div class="card-title  primary-text"><b><?php echo e($host->name); ?></b></div>
                                    </div>

                                    <div class="card-content secondary white-text">
                                        <h4 class=""> <i class="material-icons  accent-text">location_on</i> <?php echo e($host->location); ?> </h4>
                                        <h5 class="small accent-text"><i class="material-icons accent-text">school</i>
                                            <?php echo e($host->college); ?> </h5>
                                        <p><?php echo e($host->desc); ?></p>
                                    </div>


                                    <div class="card-action">

                                            <div class="white-text" style="margin-bottom:10px;">
                                                <?php for($i =1;$i<$host->rating+1;$i++): ?>
                                                    <i class="material-icons">star</i>
<?php endfor; ?>
                                                </div>
                                        <a href="" class="btn-floating primary">
                                            <i class="material-icons primary-text">favorite_border</i>
                                        </a>
                                        <a href="" class="btn-floating white secondary-text center-align">

                                        <?php echo e($room->count()); ?></a>
                                        <span class="white-text"> Rooms</span>

                                    </div>
                                    <div class="row " style="margin-bottom:10px;">

                                            <?php $__currentLoopData = $room; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

             <?php if($r->booked_bed<$r->total_bed): ?>



                                             <?php if($r->booked_bed==0): ?>

                                             <div class="col m2 l1 s3 " style=" margin:10px 10px; ">
                                                     <a href="<?php echo e(route('room.book',['host'=>str_slug($r->hostel_name),'room_no'=>$r->room_no])); ?>" class="btn btn-floating white secondary-text flow-text pulse waves-effect waves-light" style=" margin:0px 10px; display:block; text-align:center;"><?php echo e($r->room_no); ?></a>





                                         </div>
                                         <?php else: ?>
                                         <div class="col m2 l1 s3 " style=" margin:10px 10px; ">
                                                 <a href="<?php echo e(route('room.book',['host'=>str_slug($r->hostel_name),'room_no'=>$r->room_no])); ?>" class="btn btn-floating secondary white-text flow-text waves-effect waves-light" style=" margin:0px 10px; display:block; text-align:center;"><?php echo e($r->room_no); ?></a>





                                     </div>

             <?php endif; ?>
                                             <?php endif; ?>
                                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                         </div>
                                </div>

                    </div>



                    <div class="col s12 side-right m3 z-depth-0 ">


                            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia, similique magnam! Temporibus quas enim et est impedit, animi consequatur dignissimos facilis quo ipsa amet exercitationem nemo sapiente blanditiis ab eos voluptatibus vitae quasi nulla nostrum veritatis? Sint officia saepe voluptates repellat fuga facilis, voluptate, earum unde voluptas rerum velit ipsa.</p>
                                </div>


                            </div>



        </section>

        <section class="top-hotels secondary">

                <div class="divider">

                    </div>
                <div class="container">

                  <div class="row">
                    <h3 class="center white-text">Nearest Hostels</h3>
                    <div class="col s12 m4">
                      <div class="card">
                        <div class="card-image">
                          <img src="<?php echo e(asset('assets/img/bed-bedroom-cozy-164595.jpg')); ?>" alt="" class="responsive-img">
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
                          <img src="<?php echo e(asset('assets/img/bed-bedroom-comfort-1148927.jpg')); ?>" alt="" class="responsive-img">
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
                          <img src="<?php echo e(asset('assets/img/bedroom-door-entrance-271639.jpg')); ?>" alt="" class="responsive-img">
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
                          <img src="<?php echo e(asset('assets/img/apartment-chair-comfort-271614.jpg')); ?>" alt="" class="responsive-img">
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
                          <img src="<?php echo e(asset('assets/img/apartment-bed-bedroom-271624.jpg')); ?>" alt="" class="responsive-img">
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
                          <img src="<?php echo e(asset('assets/img/apartment-bed-bedroom-271624.jpg')); ?>" alt="" class="responsive-img">
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit magnam
                            illo, dolores maiores doloribus.</p>
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
<script src="<?php echo e(asset('assets/js/jquery.modal.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/materialize.min.js')); ?>"> </script>
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
        $('.datepicker').pickadate({
            selectMonths: true,
            closeOnSelect: true
        });
    });

    var date = document.querySelector('#date');
    var dt = new Date();
    var dts = dt.getDate();
    var months = dt.getUTCMonth() + 1;
    switch (months) {
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
s
</script>

</html>
