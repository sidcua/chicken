<?php 
	session_start();
	$_SESSION['dept'] = "Supply";
	include 'php/checksession.php';
    include '../php/checkoffice.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>Chicken</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/mdb.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<?php include "view/header.php"; ?>
        <div id="carousel-example-1z" class="carousel slide carousel white-text" data-ride="carousel" data-interval="5000">
                    <!--Indicators-->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
            </ol>
            <!--/.Indicators-->
            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">
                    <img class="d-block w-100" src="img/slide1.jpg" alt="First slide">
                </div>
                <!--/First slide-->
                <!--Second slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide2.jpg" alt="First slide">
                </div>
                <!--/Second slide-->
                <!--Third slide-->
                <div class="carousel-item">
                    <img class="d-block w-100" src="img/slide3.jpg" alt="First slide">
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->
            <!--Controls-->
            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
		<div class="container">
            <!-- Section: About -->
  <section class="section about mb-5" id="about">

      <!-- Secion heading -->
      <h1 class="text-center font-bold mt-5 pt-2 mb-3 dark-grey-text wow fadeIn" data-wow-delay="0.2s">
          <em>About Supply</em>
      </h1>

      <!-- Section description -->
      <p class="text-center font-up font-bold grey-text mb-5 pb-4 wow fadeIn" data-wow-delay="0.2s"></p>

      <!-- Grid row -->
      <div class="row">

          <!-- Column column -->
          <div class="col-xl-5 mr-auto mb-r col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Image -->
              <img src="./img/image1.jpg" class="img-fluid rounded z-depth-1-half"
                  alt="My photo">

          </div>
          <!-- Column column -->

          <!-- Grid column column -->
          <div class="col-xl-6 col-lg-6 wow fadeIn" data-wow-delay="0.4s">

              <!-- Description -->
              <p align="justify">Office supplies are consumables and equipment regularly used in offices by businesses and other organizations, by individuals engaged in written communications, recordkeeping or bookkeeping, janitorial and cleaning, and for storage of supplies or data. The range of items classified as office supplies varies, and typically includes small, expendable, daily use items, consumable products, small machines, higher cost equipment such as computers, as well as office furniture and art.</p>

              <p align="justify">Office supplies are typically divided by type of product and general use.</p>

          </div>
          <!-- Grid column -->

      </div>
      <!-- Grid row -->

  </section>
  <!-- Section: About -->
		</div>
		<?php include "view/footer.php"; ?>
	</body>
	<script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>
</html>