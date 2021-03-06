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
            <h1 class="h1-responsive">Manage Transactions</h1>
            <hr class="my-2">
        </div>
    </div>
    <br>
    <div class="card col-md-12" style="background-color:#1F2739;">  
        <div class="card-body" style="background-color:#1F2739;">
            <div class="table-wrapper-2">

        <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
            <thead>
                <th><h1>Name</h1></th>
                <th><h1>Position</h1></th>
                <th><h1>Username</h1></th>
                <th><h1>Office</h1></th>
                <th><h1>Status</h1></h1></th>
                <th><h1>Action</h1></th>
            </thead>
            <tbody class="tabletrans" id="tabletrans">
                <tr id="transaccount"></tr>
                <tr class='tname' ng-repeat="person in accounts">
                    <td>{{ person.name }}</td>
                    <td>{{ person.position  }}</td>
                    <td><span>{{ person.username  }}</span></td>
                    <td>{{ person.office }}</td>
                    <td>{{ person.status }}</td>
                    <td><a><span ng-click='approveAcc($event);' data-toggle='modal' data-target='#modalApprove' class='badge badge-success edititem'><i class='fa fa-check fa-2x' aria-hidden='true'></i></span></a> <a><span ng-click='declineAcc($event);' data-toggle='modal' data-target='#modalDec' class='badge badge-danger'><i class='fa fa-times fa-2x' aria-hidden='true'></i></span></a></td>
                </tr>
             </tbody>
        </table>
           </div>
        </div>
    </div>


                                     <!-- Modals -->
                                     
                                     

                                <!--Modal: modalApprove-->
<div class="modal fade" id="modalApprove" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-success" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Approve Employee?</p>
                </div>

                <!--Body-->
                <div class="modal-body">

                    <i class="fa fa-check fa-4x animated rotateIn"></i>

                </div>

                <!--Footer-->
                <div class="modal-footer flex-center">
                    <button class="btn btn-outline-secondary-modal" ng-click="accApprove();">Yes</button> <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
                                <!--Modal: modalApprove-->

                             <!--Modal: Modal Decline form-->
  <div class="modal fade" id="modalDec" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <h4 class="title"><i class="fa fa-pencil"></i>Decline Form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <form method="post" id="declineEmpForm" enctype="multipart/form-data">

                <div class="modal-body mb-0">
                    <div class="md-form form-sm">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="text" ng-model="modFname" id="empname" name="empname" class="form-control" >
                        <label for="empname" style="height:20px;">Name of Employee</label>
                    </div>

                    <div class="md-form form-sm">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="remarks" name="remarks" class="md-textarea mb-0"></textarea>
                        <label for="remarks" style="height:10px;">Remarks</label>
                    </div>

                    <div class="text-center mt-1-half">
                    <center><button class="btn btn-info mb-2" data-toggle="modal" data-target="#modalDecline">Decline<i class="fa fa-send ml-1"></i></button></center>
                    </div>

                </div>
            </div>
        </form>
        <!--/.Content-->
    </div>
</div>
                            <!--Modal: Modal Decline form-->


                                <!--Modal: modalDecline-->
<div class="modal fade" id="modalDecline" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-danger" role="document">
            <!--Content-->
            <div class="modal-content text-center">
                <!--Header-->
                <div class="modal-header d-flex justify-content-center">
                    <p class="heading">Decline Employee?</p>
                </div>

                <!--Body-->
                <div class="modal-body">

                    <i class="fa fa-times fa-4x animated rotateIn"></i>

                </div>

                <!--Footer-->
                <div class="modal-footer flex-center">
                    <button class="btn btn-outline-secondary-modal" ng-click="accDecline();">Yes</button>
                    <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
                             <!--Modal: modalDecline-->


                                     <!-- Modals -->
                                     
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

