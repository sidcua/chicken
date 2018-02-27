<?php 
	session_start();
	include 'php/checksession.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
		<title>Supply</title>
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
					<h1 class="h1-responsive">Distribute</h1>
					<hr>
				</div>
			</div>
			<div class="divspace"></div>
			<div class="row">
				<div class="col-sm-12">
					<div class="d-flex flex-row-reverse">
                        <div class="form-group d-flex flex-row">
                            <label for="slctdistribution" style="margin-right: 20px; margin-top: 10px;">Distribute: </label>
                            <select class="form-control" id="slctdistribution">
                                <option>Office</option>
                                <option>Employee</option>
                            </select>
                        </div>
                    </div>
				</div>
			</div>						    
			<div class="row" style="margin-top: 25px;">
				<div class="col-sm-12">
					<div class="table-wrapper-2">
						<table class="table">
						    <thead class="blue-grey lighten-4">
						        <tr>
						            <th>Item name</th>
                                    <th>Price</th>
						            <th>Quantity</th>
						            <th>Action</th>
						        </tr>
						    </thead>
						    <input type="hidden" id="itemidholder" value="" />
						    <tbody id="tblitems"> 
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
	<script type="text/javascript" src="js/distribute.js"></script>
</html>
<div class="modal fade" id="modaldistributeitem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-info" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header">
                <p class="heading lead">Distribute Item</p>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" class="white-text">&times;</span>
                </button>
            </div>

            <!--Body-->
            <div class="modal-body">
            	<p class="error" id="errormsgdistributeitem"></p>
                <label for="slctdist" style="margin-right: 20px; margin-top: 10px;"></label>
                <select class="form-control" id="slctdist">
                </select>
				<div class="md-form">
				    <input type="number" id="txtquantity" class="form-control">
				    <label for="txtquantity" class="">Quantity</label>
				</div>
            </div>

            <!--Footer-->
            <div class="modal-footer justify-content-center">
                <button onclick="distribute()" type="button" class="btn btn-primary-modal">Distribute</button>
                <button type="button" class="btn btn-outline-secondary-modal waves-effect" data-dismiss="modal">Cancel</button>
            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
