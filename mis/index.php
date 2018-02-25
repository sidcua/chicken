<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Management Information System</title>
    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/mis.scss" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/mis.js"></script>
</head>
<body ng-app="appMIS" ng-controller="ctrlMIS" ng-init="">

     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
                <form class="form-inline">
                    <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                </form>
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
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/47.jpg'); background-repeat: no-repeat; background-size: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive font-bold">20 Photos to inspire you to visit Tatra Mountains</h1>
                        </li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-outline-white" rel="nofollow">See more!</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/77.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive font-bold">10 Reasons you should spend winter holiday in mountains </h1>
                        </li>
                        <li>
                            <p>Best atractions and winter sports!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-slight" style="background-image: url('https://mdbootstrap.com/img/Photos/Others/nature7.jpg'); background-repeat: no-repeat; background-size: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <li>
                            <h1 class="h1-responsive font-bold">Weekend in the nature - the best way to relax</h1>
                        </li>
                        <li>
                            <p>8 Reasons why you need to spend more time in nature</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-outline-white" rel="nofollow">Read more</a>
                        </li>
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Third slide-->
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

    <!--Footer-->
    <footer class="page-footer center-on-small-only  mdb-color lighten-3">

        <!--Footer Links-->
        <div class="container">
            <div class="row">

                <!--First column-->
                <div class="col-lg-3 col-md-6">
                    <h5 class="title font-bold mt-3 mb-4">ABOUT MATERIAL DESIGN</h5>

                    <p>Material Design for Bootstrap (MDB) is a powerful Material Design UI KIT for most popular HTML, CSS,
                        and JS framework - Bootstrap.</p>
                </div>
                <!--/.First column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Second column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Recent Trips</h5>
                    <ul>
                        <li>
                            <a href="#!">Balkans</a>
                        </li>
                        <li>
                            <a href="#!">Tatra Mountains</a>
                        </li>
                        <li>
                            <a href="#!">Norway Fjords</a>
                        </li>
                        <li>
                            <a href="#!">Baikal Lake</a>
                        </li>
                    </ul>
                </div>
                <!--/.Second column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Third column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">My guest articles</h5>
                    <ul>
                        <li>
                            <a href="#!">"Things I learn on the road"</a>
                        </li>
                        <li>
                            <a href="#!">"Low-budget traveling made simple"</a>
                        </li>
                        <li>
                            <a href="#!">"Talking with locals"</a>
                        </li>
                        <li>
                            <a href="#!">"Leaving things behind"</a>
                        </li>
                    </ul>
                </div>
                <!--/.Third column-->

                <hr class="w-100 clearfix d-sm-none">

                <!--Fourth column-->
                <div class="col-lg-2 col-md-6 ml-auto">
                    <h5 class="title font-bold mt-3 mb-4">Follow me on</h5>
                    <ul>
                        <li>
                            <a href="#!">Facebook</a>
                        </li>
                        <li>
                            <a href="#!">Instagram</a>
                        </li>
                        <li>
                            <a href="#!">Twitter</a>
                        </li>
                        <li>
                            <a href="#!">Pinterest</a>
                        </li>
                    </ul>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright:
                <a href="https://www.MDBootstrap.com"> MDBootstrap.com </a>

            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


      <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/mdb/mdb.js"></script>
	  <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	  <script type="text/javascript" src="js/mdb/popper.min.js"></script>
</body>
    
</html>