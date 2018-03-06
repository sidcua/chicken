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

<br>
    <div style="margin-top: 100px;"></div>
    <div class="container">
        <div class="jumbotron">
            <h1 class="h1-responsive">Supply</h1>
            <hr class="my-2">
        </div>
    </div>
    <div class="container">
        <ul class="nav nav-tabs nav-justified">
           <li class="nav-item">
                <a class="nav-link active" style="margin-left:50px;" data-toggle="tab" href="#panel1" role="tab">Supply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  style="margin-left:50px;" data-toggle="tab" href="#panel2" role="tab">Transactions</a>
            </li>
        </ul>
    </div>
    <br>

    <div class="tab-content card">
            <!--Panel 1-->
         <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <div class="card col-md-12" style="background-color:#1F2739;">  
                <div class="card-body" style="background-color:#1F2739;">
                    <div class="table-wrapper-2" >

                    <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
                    <thead>
                        <tr>
                            <th><h1>Item Name</h1></th>
                            <th><h1>Price</h1></th>
                            <th><h1>Quantity</h1></th>
                        </tr>   
                    </thead>
                    <tbody id="tblsupply">
                    </tbody>
                </table>
                   </div>
                </div>
            </div>
        </div>
        <!--Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel">
                <div class="card col-md-12" style="background-color:#1F2739;">  
                <div class="card-body" style="background-color:#1F2739;">
                    <div class="table-wrapper-2" >

                    <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
                    <thead>
                        <tr>
                            <th><h1>Item Name</h1></th>
                            <th><h1>Transaction</h1></th>
                            <th><h1>Remark</h1></th>
                        </tr>   
                    </thead>
                    <tbody id="tbltransaction">
                    </tbody>
                </table>
                   </div>
                </div>
            </div>
            </div>
            <!--/.Panel 2-->
    </div>

<?php include './view/footer.php'; ?>
      <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/mdb/mdb.js"></script>
	  <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	  <script type="text/javascript" src="js/mdb/popper.min.js"></script>
      <script type="text/javascript" src="js/supplylog.js"></script>
</body>
</html>
