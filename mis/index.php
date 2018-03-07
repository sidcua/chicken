<?php
    session_start();
    $_SESSION['dept'] = "MIS";
    include '../php/checkoffice.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MIS</title>
    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/mis.scss" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/mis.js"></script>
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/5a9efc8ed7591465c7085194/default';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
</head>
<body ng-app="appMIS" ng-controller="ctrlMIS" ng-init="refresh();">

     <!--Navbar-->
     <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar">
        <div class="container">
            <a class="navbar-brand" href="#">Chicken Dinner</a>
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
                        <a class="nav-link" href="./transactions.php">Transactions</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="./supplylog.php">Supply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./accountinglog.php">Accounting</a>
                    </li>  <li class="nav-item">
                        <a class="nav-link" href="./hrlog.php">Human Resource</a>
                    </li> -->

                    <li class="nav-item btn-group">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Offices
                        </a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="./supplylog.php">Supply</a>
                        <a class="dropdown-item" href="./accountinglog.php">Accounting</a>
                        <a class="dropdown-item" href="./hrlog.php">Human Resource</a>                        </div>
                    </li>
                   
                </ul>
               

            <ul class="navbar-nav ml-auto d-flex flex-row">
                <li class="nav-item">
                    <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                    <strong>
                    <!-- <span class="mr-lg-2" style='color:white' id="pname"> -->
                    <?php
                    echo $_SESSION['name'];
                    ?>
                    </strong>
                    </span>                 
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
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!-- First slide -->
            <div class="carousel-item active view hm-black-light" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/misb.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px; object-fit: cover;">
                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <!-- <li>
                            <h1 class="h1-responsive font-bold">20 Photos to inspire you to visit Tatra Mountains</h1>
                        </li>
                        <li>
                            <p>Best places you should see, traditional dishes that you have to try</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/getting-started/" class="btn btn-outline-white" rel="nofollow">See more!</a>
                        </li> -->
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.First slide-->

            <!-- Second slide -->
            <div class="carousel-item view hm-black-light" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/misb2.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px; object-fit: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <!-- <li>
                            <h1 class="h1-responsive font-bold">10 Reasons you should spend winter holiday in mountains </h1>
                        </li>
                        <li>
                            <p>Best atractions and winter sports!</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/bootstrap-tutorial/" class="btn btn-outline-white" rel="nofollow">Read more</a>
                        </li> -->
                    </ul>
                </div>
                <!-- /.Caption -->

            </div>
            <!--/.Second slide -->

            <!-- Third slide -->
            <div class="carousel-item view hm-black-slight" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/misb3.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px; object-fit: cover;">

                <!-- Caption -->
                <div class="full-bg-img flex-center white-text">
                    <ul class="animated fadeIn col-md-12">
                        <!-- <li>
                            <h1 class="h1-responsive font-bold">Weekend in the nature - the best way to relax</h1>
                        </li>
                        <li>
                            <p>8 Reasons why you need to spend more time in nature</p>
                        </li>
                        <li>
                            <a target="_blank" href="https://mdbootstrap.com/forums/forum/support/" class="btn btn-outline-white" rel="nofollow">Read more</a>
                        </li> -->
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
                <em>About Management Information System</em>
            </h1>

            <!-- Section description -->
            <p class="text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">Management Information System or Management Information Services</p>

            <!-- Grid row -->
            <div class="row">

                <!-- Column column -->
                <div class="col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn" data-wow-delay="0.4s">

                    <!-- Image -->
                    <img src="./img/mis.jpg"
                        alt="My photo">

                </div>
                <!-- Column column -->

                <!-- Grid column column -->
                <div class="col-xl-6 col-lg-6 wow fadeIn" data-wow-delay="0.4s">

                    <!-- Description -->
                    <p align="justify">Management information systems, produce fixed, regularly scheduled reports based on data extracted and summarized from the firm's underlying transaction processing systems to middle and operational level managers to identify and inform semi-structured decision problems.</p>

                    <p align="justify">Management Information System evolution corresponding to the five phases in the development of computing technology:</p>

                    <ul>
                        <li>Mainframe computing.</li>
                        <li>Minicomputer computing.</li>
                        <li>Personal computers.</li>
                        <li>Client/server networks.</li>
                        <li>Enterprise computing.</li>
                        <li>Cloud computing.</li>
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
                <img class="img-fluid" src="./img/mainframe.jpg" alt="Card image cap">
  
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Mainframe computing</h4>
                    <!--Text-->
                    <p class="card-text mb-4"><strong>Referred to as "Big Iron". Implemented using two or more central processing units CPU. The data storage capacity of these computers is very high.</strong></p>
                </div>
  
            </div>
            <!--/.Card-->
        </div>
        <!--First columnn-->
  
        <!--Second columnn-->
         <div class="col-lg-4">
            <!--Card-->
            <div class="card wow fadeIn" data-wow-delay="0.2s">
  
                <!--Card image-->
                <img class="img-fluid" src="./img/minicomp.jpg" alt="Card image cap">
  
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Minicomputer computing</h4>
                    <!--Text-->
                    <p class="card-text mb-4"> <strong>Can be used by many operators simultaneously. High processing speed and high storage capacity than the microcomputers.</strong></p>
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
                <img class="img-fluid" src="./img/computer.jpg" alt="Card image cap">
  
                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Personal computers</h4>
                    <!--Text-->
                    <p class="card-text mb-4"><strong> a digital computer designed for use by only one person at a time. Is also a multi-purpose computer whose size, capabilities, and price make it feasible for individual use.</strong></p>
                </div>
  
            </div>
            <!--/.Card-->
        </div>
        <!--Third columnn-->
  
          <!--Fourth columnn-->
          <div class="col-lg-4 mb-4">
                  <!--Card-->
                  <div class="card wow fadeIn" data-wow-delay="0.6s">
  
                      <!--Card image-->
                      <img class="img-fluid" src="./img/client.png" alt="Card image cap">
  
                      <!--Card content-->
                      <div class="card-body">
                          <!--Title-->
                          <h4 class="card-title">Client/server networks</h4>
                          <!--Text-->
                          <p class="card-text mb-4"><strong>A computer network in which one centralized, powerful computer is a hub to which many less powerful personal computers or workstations are connected.</strong></p>
                      </div>
  
                  </div>
                  <!--/.Card-->
              </div>
              <!--Fourth columnn-->      
  
                <!--Fifth columnn-->
          <div class="col-lg-4 mb-4">
              <!--Card-->
              <div class="card wow fadeIn" data-wow-delay="0.6s">
  
                  <!--Card image-->
                  <img class="img-fluid" src="./img/enterprise.png" alt="Card image cap">
  
                  <!--Card content-->
                  <div class="card-body">
                      <!--Title-->
                      <h4 class="card-title">Enterprise computing</h4>
                      <!--Text-->
                      <p class="card-text mb-4"><strong>Enterprise computing is usually seen as a collection of big business software solutions to common problems such as resource management and streamlining processes.</strong></p>
                  </div>
  
              </div>
              <!--/.Card-->
          </div>
              <!--Fifth columnn-->
  
                <!--Sixth columnn-->
          <div class="col-lg-4 mb-4">
              <!--Card-->
              <div class="card wow fadeIn" data-wow-delay="0.6s">
  
                  <!--Card image-->
                  <img class="img-fluid" src="./img/cloud.jpg" alt="Card image cap">
  
                  <!--Card content-->
                  <div class="card-body">
                      <!--Title-->
                      <h4 class="card-title">Cloud computing</h4>
                      <!--Text-->
                      <p class="card-text mb-4"><strong>The practice of using a network of remote servers hosted on the Internet to store, manage, and process data, rather than a local server or a personal computer.</strong></p>
                  </div>
  
              </div>
              <!--/.Card-->
          </div>
          <!--Sixth columnn-->
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