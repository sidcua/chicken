<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Human Resource</title>
    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/hr.scss" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/hr.js"></script>

</head>
<body ng-app="appHR" ng-controller="ctrlHR" ng-init="refresh();">
    
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">
                <strong>Chicken Dinner</strong>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="./">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./account.php">Employee</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./emphistory.php">Employee History</a>
                    </li>
                </ul>
            </div>
            
            <ul class="navbar-nav ml-auto d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                    <strong><span class="mr-lg-2" style='color:white' id="pname"></span>       </strong> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        
                        <a class="dropdown-item waves-effect waves-light" aria-hidden="false" data-toggle="modal" data-target="#modalConfirmLog" >Logout</a>
                    </div>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <!--/.Navbar-->

  <!--Carousel Wrapper-->
  <div id="carousel-example-3" class="carousel slide carousel-fade white-text" data-ride="carousel" data-interval="5000">
  <!--Indicators-->
  <ol class="carousel-indicators">
      <li data-target="#carousel-example-3" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-3" data-slide-to="1"></li>
      <li data-target="#carousel-example-3" data-slide-to="2"></li>
      <li data-target="#carousel-example-3" data-slide-to="3"></li>
  </ol>
  <!--/.Indicators-->

  <!--Slides-->
  <div class="carousel-inner" role="listbox">

      <!-- First slide -->
      <div class="carousel-item active view hm-black-light" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/Hr.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px;">
          <!-- Caption -->
          <div class="full-bg-img flex-center white-text">
              <ul class="animated fadeIn col-md-12">
                  <li>
                      <!-- <h1 class="h1-responsive font-bold">20 Photos to inspire you to visit Tatra Mountains</h1> -->
                  </li>
                  <li>
                      <!-- <p>Best places you should see, traditional dishes that you have to try</p> -->
                  </li>
                  <li>
                      <!-- <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-outline-white" rel="nofollow">See more!</a> -->
                  </li>
              </ul>
          </div>
          <!-- /.Caption -->

      </div>
      <!--/.First slide-->

      <!-- Second slide -->
      <div class="carousel-item view hm-black-light" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/Hr.png" style="width:100%; height:100%; margin:auto; margin-top: -10px;">

          <!-- Caption -->
          <div class="full-bg-img flex-center white-text">
              <ul class="animated fadeIn col-md-12">
                  <li>
                      <!-- <h1 class="h1-responsive font-bold">10 Reasons you should spend winter holiday in mountains </h1> -->
                  </li>
                  <li>
                      <!-- <p>Best atractions and winter sports!</p> -->
                  </li>
                  <li>
                      <!-- <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white" rel="nofollow">Read more</a> -->
                  </li>
              </ul>
          </div>
          <!-- /.Caption -->

      </div>
      <!--/.Second slide -->

      <!-- Third slide -->
      <div class="carousel-item view hm-black-slight" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/Hr2.png" style="width:100%; height:100%; margin:auto; margin-top: -10px;">

          <!-- Caption -->
          <div class="full-bg-img flex-center white-text">
              <ul class="animated fadeIn col-md-12">
                  <li>
                      <!-- <h1 class="h1-responsive font-bold">Weekend in the nature - the best way to relax</h1> -->
                  </li>
                  <li>
                      <!-- <p>8 Reasons why you need to spend more time in nature</p> -->
                  </li>
                  <li>
                      <!-- <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-outline-white" rel="nofollow">Read more</a> -->
                  </li>
              </ul>
          </div>
          <!-- /.Caption -->

      </div>
      <!--/.Third slide-->
      <div class="carousel-item view hm-black-slight" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/background4.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px;">

          <!-- Caption -->
          <div class="full-bg-img flex-center white-text">
              <ul class="animated fadeIn col-md-12">
                  <li>
                      <!-- <h1 class="h1-responsive font-bold">Weekend in the nature - the best way to relax</h1> -->
                  </li>
                  <li>
                      <!-- <p>8 Reasons why you need to spend more time in nature</p> -->
                  </li>
                  <li>
                      <!-- <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-outline-white" rel="nofollow">Read more</a> -->
                  </li>
              </ul>
          </div>
          <!-- /.Caption -->

      </div>
  </div>
  <!--/.Slides-->

  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->

<br>

<!--Content-->
<div class="container">


  <!-- Section: About -->
  <section class="section about mb-5" id="about">

      <!-- Secion heading -->
      <h1 class="text-center font-bold mt-5 pt-2 mb-3 dark-grey-text wow fadeIn" data-wow-delay="0.2s">
          <em>About us</em>
      </h1>

      <!-- Section description -->
      <p class="text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">Tourism students with love to travel</p>

      <!-- Grid row -->
      <div class="row">

          <!-- Column column -->
          <div class="col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Image -->
              <img src="https://mdbootstrap.com/img/Photos/Others/images/53.jpg" class="img-fluid rounded z-depth-1-half"
                  alt="My photo">

          </div>
          <!-- Column column -->

          <!-- Grid column column -->
          <div class="col-xl-6 col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Description -->
              <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo animi soluta ratione quisquam, dicta ab
                  cupiditate iure eaque? Repellendus voluptatum, magni impedit eaque animi maxime.</p>

              <p align="justify">Nemo animi soluta ratione quisquam, dicta ab cupiditate iure eaque? Repellendus voluptatum, magni impedit
                  eaque delectus, beatae maxime temporibus maiores quibusdam quasi rem magnam.</p>

              <ul>
                  <li>Nemo animi soluta ratione</li>
                  <li>Beatae maxime temporibus</li>
                  <li>Consectetur adipisicing elit</li>
              </ul>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

  </section>
  <!-- Section: About -->

  <hr>

  <div class="row my-5 py-4">
      <!--First columnn-->
      <div class="col-lg-4">
          <!--Card-->
          <div class="card wow fadeIn" data-wow-delay="0.2s">

              <!--Card image-->
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Mesmerizing Landscapes</h4>
                  <!--Text-->
                  <p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="font-bold">Read more</a>
              </div>

          </div>
          <!--/.Card-->
      </div>
      <!--First columnn-->

      <!--Second columnn-->
      <div class="col-lg-4">
          <!--Card-->
          <div class="card wow fadeIn" data-wow-delay="0.4s">

              <!--Card image-->
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Top 5 holiday's places</h4>
                  <!--Text-->
                  <p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="font-bold">Read more</a>
              </div>

          </div>
          <!--/.Card-->

      </div>
      <!--Second columnn-->

      <!--Third columnn-->
      <div class="col-lg-4 mb-4">
          <!--Card-->
          <div class="card wow fadeIn" data-wow-delay="0.6s">

              <!--Card image-->
              <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Mountain Rivers</h4>
                  <!--Text-->
                  <p class="card-text mb-4">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="font-bold">Read more</a>
              </div>

          </div>
          <!--/.Card-->
      </div>
      <!--Third columnn-->
  </div>
</div>
<!--/.Content-->

    <?php include './view/footer.php'; ?>
   
     <!--Modal: modalConfirmLogout-->
     <div class="modal fade" id="modalConfirmLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm modal-notify modal-warning" role="document">
                <!--Content-->
                <div class="modal-content text-center">
                    <!--Header-->
                    <div class="modal-header d-flex justify-content-center">
                        <p class="heading">Are you sure?</p>
                    </div>

                    <!--Body-->
                    <div class="modal-body">

                        <i class="fa fa-times fa-4x animated rotateIn"></i>

                    </div>

                    <!--Footer-->
                    <div class="modal-footer flex-center">
                        <button class="btn btn-outline-secondary-modal" ng-click="logout();">Yes</button> <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: modalConfirmLogout-->

      <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/mdb/mdb.js"></script>
	  <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	  <script type="text/javascript" src="js/mdb/popper.min.js"></script>
    
</body>
</html>