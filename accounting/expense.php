<?php 
	session_start();
	$_SESSION['dept'] = "Accounting";
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
		<title>Expense</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="css/mdb.css" />
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" />
	</head>
	<body>
		<?php include "view/header.php"; ?>
		<div class="divspace"></div>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1 class="h1-responsive">Expense</h1>
					<hr>
				</div>
			</div>
			<div class="divspace"></div>
			<div class="row">
				<div class="col-sm-12">
					<div class="d-flex justify-content-end">
                        <div class="md-form" style="margin-top: 10px; margin-right: 70px;">
							<label for="slctmonth">Month</label>
                            <select id="slctmonth" onchange="month(this.value)" class="form-control" style="margin-left: 50px;">
                            </select>
						</div>
                        <div class="md-form" style="margin-top: 10px;">
							<label for="slctyear">Year</label>
                            <select id="slctyear" onchange="year(this.value)" class="form-control" style="margin-left: 50px;">
                            </select>
						</div>
						<div class="md-form" style="margin-left: 100px;">
							<button type="button" data-toggle="modal" data-target="#modalclearexpense" class="btn btn-danger"><i class="fa fa-trash" aria-hidden="true"></i> Clear Expense</button>
						</div>
					</div>
				</div>
			</div>						    
			<div class="row">
				<div class="col-sm-12">
					<div class="table-wrapper-2">
						<table class="table">
						    <thead class="blue-grey lighten-4">
						        <tr>
						            <th>Item name</th>
						            <th>Price</th>
						            <th>Quantity</th>
						            <th>Total</th>
                                    <th>Date</th>
						        </tr>
						    </thead>
						    <input type="hidden" id="itemidholder" value="" />
						    <tbody id="tblexpense"> 
						    </tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
		<div class="divspace"></div>
		<?php include "view/footer.php"; ?>
	</body>
	<script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>
	<script type="text/javascript" src="js/expense.js"></script>
</html>
<div class="modal fade" id="modalclearexpense" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
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
                    <button onclick="clearexpense()" class="btn  btn-outline-secondary-modal">Yes</button>
                    <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>