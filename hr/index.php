<?php
    session_start();
    $_SESSION['dept'] = "HR";
    include '../php/checkoffice.php';
?>
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
                    <strong>
                    <!-- <span class="mr-lg-2" style='color:white' id="pname"> </span>       -->
                    <?php
                     echo $_SESSION['name'];
                    ?>
                     </strong> 
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        
                        <a class="dropdown-item waves-effect waves-light" aria-hidden="false" data-toggle="modal" data-target="#modalConfirmLog" >Logout</a>
                    </div>
                </li>
            </ul>
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
      <div class="carousel-item active view hm-black-light" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/background4.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px; object-fit: cover;">
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
      <div class="carousel-item view hm-black-slight" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/background5.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px; object-fit: cover;">

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
      <div class="carousel-item view hm-black-slight" style="background-repeat: no-repeat; background-size: cover;"><img src="./img/hr2.jpg" style="width:100%; height:100%; margin:auto; margin-top: -10px;">

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
          <em>About Human Resource</em>
      </h1>

      <!-- Section description -->
      <p class="text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s">Human Capital with Different Employees</p>

      <!-- Grid row -->
      <div class="row">

          <!-- Column column -->
          <div class="col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Image -->
              <img src="./img/hr3.png" class="img-fluid rounded z-depth-1-half"
                  alt="My photo">

          </div>
          <!-- Column column -->

          <!-- Grid column column -->
          <div class="col-xl-6 col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Description -->
              <p align="justify">Human resource management involves developing and administering programs that are designed to increase the effectiveness of an organization or business. It includes the entire spectrum of creating, managing, and cultivating the employer-employee relationship.</p>

              <p align="justify">For most organizations, agencies, and businesses, the human resources department is responsible for:</p>

              <ul>
                  <li>Managing job recruitment, selection, and promotion</li>
                  <li>Developing and overseeing employee benefits and wellness programs</li>
                  <li>Promoting employee career development and job training</li>
                  <li>Providing orientation programs for new hires</li>
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
              <img class="img-fluid" src="./img/zed.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Zeddie Charles R. Santos</h4>
                  <!--Text-->
                  <p class="card-text mb-4"><strong>“A mission leads to a situation. A situation leads to a mission.”</strong></p>
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
              <img class="img-fluid" src="./img/chard2.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Richard Christian A. Villano</h4>
                  <!--Text-->
                  <p class="card-text mb-4"> <strong>“Whatever the mind of man can conceive and believe, it can be achieve.”</strong></p>
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
              <img class="img-fluid" src="./img/sid.jpg" alt="Card image cap">

              <!--Card content-->
              <div class="card-body">
                  <!--Title-->
                  <h4 class="card-title">Sid Jeric C. Cua</h4>
                  <!--Text-->
                  <p class="card-text mb-4"><strong>“In the business world, the rearview mirror is always clearer than the windshield.”</strong></p>
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
                    <img class="img-fluid" src="./img/friel.jpg" alt="Card image cap">

                    <!--Card content-->
                    <div class="card-body">
                        <!--Title-->
                        <h4 class="card-title">Frielzekiel M. Nicolas</h4>
                        <!--Text-->
                        <p class="card-text mb-4"><strong>“There are no secrets to success. It is the result of preparation, hard work, and from failure.”</strong></p>
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
                <img class="img-fluid" src="./img/kiram.jpg" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Abdullah M. Kiram</h4>
                    <!--Text-->
                    <p class="card-text mb-4"><strong>“Whenever you find yourself on the side of majority, it is time to pause and reflect.”</strong></p>
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
                <img class="img-fluid" src="./img/ben.jpg" alt="Card image cap">

                <!--Card content-->
                <div class="card-body">
                    <!--Title-->
                    <h4 class="card-title">Benrasheed M. Salim</h4>
                    <!--Text-->
                    <p class="card-text mb-4"><strong>“Making money is art and working is art and good business is the best art.”</strong></p>
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