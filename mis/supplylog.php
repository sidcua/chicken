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
    <br>
    <br>
    <br>
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

<?php include './view/footer.php'; ?>
      <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	  <script type="text/javascript" src="js/mdb/mdb.js"></script>
	  <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	  <script type="text/javascript" src="js/mdb/popper.min.js"></script>
      <script type="text/javascript" src="js/supplylog.js"></script>
</body>
</html>
