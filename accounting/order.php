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
		<title>Orders</title>
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
					<h1 class="h1-responsive">Order</h1>
					<hr>
				</div>
			</div>
			<div class="divspace"></div>
			<div class="row">
				<div class="col-sm-12">
					<div class="d-flex flex-row-reverse">
						<div class="md-form">
							<button type="button" data-toggle="modal" data-target="#modaladdorder" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> Add Order</button>
						</div>
					</div>
				</div>
			</div>						    
			<div class="row">
				<div class="col-sm-12">
                    <p class="error text-center" id="errormsgtblorder"></p>
					<div class="table-wrapper-2">
						<table class="table">
						    <thead class="blue-grey lighten-4">
						        <tr>
						            <th>Customer</th>
						            <th>Item</th>
						            <th>Quantity</th>
						            <th>Status</th>
						            <th>Action</th>
						        </tr>
						    </thead>
						    <input type="hidden" id="orderidholder" value="" />
						    <tbody id="tblorder"> 
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
	<script type="text/javascript" src="js/order.js"></script>
</html>
<div class="modal fade" id="modaladdorder" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Add Order</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
            	<p class="error" id="errormsgaddorder"></p>
                <div class="md-form">
				    <input type="text" id="txtname" class="form-control">
				    <label for="txtname" class="">Customer name</label>
				</div>
                <div class="form-group">
                    <label for="slctitem">Item</label>
                    <select id="slctitem" class="form-control"></select>
                </div>
				<div class="md-form">
				    <input type="number" min="1" id="txtquantity" class="form-control">
				    <label for="txtquantity" class="">Quantity</label>
				</div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <button onclick="addorder()" type="button" class="btn btn-primary-modal">Add</button>
                <button type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modalcompleteorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Complete Order?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fa fa-check fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <button onclick="completeorder()" type="button" class="btn btn-outline-secondary-modal">Yes</button>
                <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<div class="modal fade" id="modaldeclineorder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
        <!--Content-->
        <div class="modal-content text-center">
            <!--Header-->
            <div class="modal-header d-flex justify-content-center">
                <p class="heading">Decline order?</p>
            </div>

            <!--Body-->
            <div class="modal-body">

                <i class="fa fa-times fa-4x animated rotateIn"></i>

            </div>

            <!--Footer-->
            <div class="modal-footer flex-center">
                <button onclick="declineorder()" type="button" class="btn btn-outline-secondary-modal">Yes</button>
                <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>