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
            <div class="table-wrapper-2">

            <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
            <thead>
                <tr>
                    <th><h1>Name</h1></th>
                    <th><h1>Position</h1></th>
                    <th><h1>Username</h1></th>
                    <th><h1>Office</h1></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Google</td>
                    <td>9518</td>
                    <td>6369</td>
                    <td>01:32:50</td>
                </tr>
                <tr>
                    <td>Twitter</td>
                    <td>7326</td>
                    <td>10437</td>
                    <td>00:51:22</td>
                </tr>
                <tr>
                    <td>Amazon</td>
                    <td>4162</td>
                    <td>5327</td>
                    <td>00:24:34</td>
                </tr>
            <tr>
                    <td>LinkedIn</td>
                    <td>3654</td>
                    <td>2961</td>
                    <td>00:12:10</td>
                </tr>
            <tr>
                    <td>CodePen</td>
                    <td>2002</td>
                    <td>4135</td>
                    <td>00:46:19</td>
                </tr>
            <tr>
                    <td>GitHub</td>
                    <td>4623</td>
                    <td>3486</td>
                    <td>00:31:52</td>
                </tr>
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

</body>
</html>