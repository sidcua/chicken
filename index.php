<?php 
	session_start();
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
		<div class="container">
			<div class="row"><br><br><br><br><br><br><br></div>
			<div class="row">
				<div class="col-sm-2"></div>
				<div class="col-sm-8">	
					<p class="h1-responsive text-center white-text">XYZ Corporation</p>
			        <br>
			        <div class="row">
			        	<div class="col-sm-2"></div>
			        	<div class="col-sm-8">
			        		<p class="error" id="errormsglogin"></p>
			        		<div class="md-form">
						        <i class="fa fa-user prefix white-text"></i>
						        <input type="text" id="txtusername" class="form-control white-text" onkeydown="if(event.keyCode == 13) login();">
						        <label class="white-text" for="txtemail">Your email</label>
						    </div>

						    <div class="md-form">
						        <i class="fa fa-lock prefix white-text"></i>
						        <input type="password" id="txtpassword" class="form-control white-text" onkeydown="if(event.keyCode == 13) login();">
						        <label class="white-text" for="txtpassword">Your password</label>
						    </div>
			        	</div>
			        	<div class="col-sm-2"></div>
			        </div>
			        

				    <div class="text-center">
				        <button class="btn btn-default" onclick="login()">Login</button>
				    </div>
				</div>
				<div class="col-sm-2"></div>
			</div>
		</div>
	</body>
	<script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>
	<script type="text/javascript" src="js/login.js"></script>
</html>