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

</head>
<body ng-app="appMIS" ng-controller="ctrlMIS" ng-init="refresh();">

<?php include './view/header.php'; ?>

<div style="margin-top: 100px;"></div>
    <div class="container">
        <div class="jumbotron">
            <h1 class="h1-responsive">Accounting</h1>
            <p class="lead text-center">Expense</p>
            <hr class="my-2">
        </div>
    </div>
    <div class="container">
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
                </div>
            </div>
        </div>
    </div>
    <div class="card col-md-12" style="background-color:#1F2739;">  
        <div class="card-body" style="background-color:#1F2739;">
            <div class="table-wrapper-2">

            <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
            <thead>
                <tr>
                    <th><h1>Item Name</h1></th>
                    <th><h1>Price</h1></th>
                    <th><h1>Quantity</h1></th>
                    <th><h1>Total</h1></th>
                    <th><h1>Date</h1></th>
                </tr>
            </thead>
            <tbody id="tblexpense">
            </tbody>
        </table>
           </div>
        </div>
    </div>

<?php include './view/footer.php'; ?>

      <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/mdb/mdb.js"></script>
	  <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	  <script type="text/javascript" src="js/mdb/popper.min.js"></script>
        <script type="text/javascript" src="js/accountinglog.js"></script>
</body>
</html>