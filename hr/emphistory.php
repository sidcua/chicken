<?php
    session_start();
    $_SESSION['dept'] = "HR";
    include '../php/checkoffice.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Human Resource</title>

    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
	<link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/hr.scss" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/hr.js"></script>
</head>
<body ng-app="appHR" ng-controller="ctrlHR" ng-init="refresh();">
<?php include './view/header.php'; ?>
    <br>
    <div class="col-md-5 offset-md-1">  
    <strong><p class="h1-responsive">Employee History</p>
    </div>
    <br>
    
    <!--Modal: modalConfirmDelete-->
    <div class="modal fade" id="modalConfirmClear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button class="btn btn-outline-secondary-modal" ng-click="deleteEmpHist();">Yes</button>
                        <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: modalConfirmDelete-->

    <div class="card col-md-12">  
        <div class="card-body">
            <div class="table-wrapper-2">
                <table class="table table-hover table-responsive-md table-fixed">
                    <thead >
                        <tr>
                            <th>Name</th>
                            <th>Reason</th>
                            <th style="width:25%;">Date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <!-- <input type="hidden" id="taccount" name="taccount" value="" /> -->
                    <tbody class="empHistory" id="tables">
                        <tr id="empHistory">
                        </tr>
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="position-fixed">
   
    
    </div>

<?php include './view/footer.php'; ?>

                                         <!-- Modal MessageBox -->
 <div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div ng-hide="orderInfo">
                    <div class="modal-header">
                        <h4 class="modal-title"><strong>{{ modalTitle }}</strong></h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>

                    </div>
                    <div class="modal-body">    
                        <p>{{ modalText }}</p>
                    </div>
                </div>
                                        <!-- Modal MessageBox -->       


    <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>
   
</body>
</html>