<!DOCTYPE html>
<html>
<head>
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
    <!-- Search form -->
     <form class="form-inline">
                
        <input class="form-control mr-lg-8" type="text" style='color:black' align="right" width="48" height="48" placeholder="Search" aria-label="Search">
     </form>
    <!-- Search form -->
                                                   
                                      <!-- MODALS -->

    <!--Modal: Edit From-->
 <div class="modal fade" id="modalEdit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">

                    <!--Header-->
                    <div class="modal-header light-blue darken-3 white-text">
                        <h4 class="title"><i class="fa fa-newspaper-o"></i> Edit Form</h4>
                        <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!--Body-->
                    <div class="modal-body mb-0">

                    <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="efname" id="efname" class="form-control">
                    <label for="efname">Full Name</label>
                </div>
                
                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="eposition" id="eposition" class="form-control" list="posList">
                    <label for="eposition">Position</label>
                    <datalist id="posList">
                        <option value="Admin">
                        <option value="User">
                    </datalist>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="eusername" id="eusername" class="form-control">
                    <label for="eusername">Username</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="epassword" id="epassword" class="form-control" maxlength = "20" minlength = "8">
                    <label for="epassword">Password</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-lock prefix"></i>
                    <input type="password" name="ecpassword" id="ecpassword" class="form-control" maxlength = "20" minlength = "8">
                    <label for="ecpassword">Confirm password</label>
                </div>

            <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" name="eoffice" id="eoffice" class="form-control" list="eoffList">
                    <label for="eoffice">Office</label>
                    <datalist id="eoffList">
                        <option value="Accounting">
                        <option value="Supply">
                        <option value="HR">
                    </datalist>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn btn-info mb-1" name="saveEdit" >Save<i class="fa fa-check ml-1"></i></button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
  </div>
    <!--Modal: Edit From-->

                                          
    
    <!--Modal: Register Form-->
    <div class="modal fade" id="modalReg" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog cascading-modal" role="document">
            <!--Content-->
            <div class="modal-content">
    
                <!--Header-->
                <div class="modal-header light-blue darken-3 white-text">
                    <h4 class="title"><i class="fa fa-user-plus"></i> Register</h4>
                    <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!--Body-->
                
                <form method="post" id="addEmpForm" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" name="fname" id="fname" class="form-control">
                            <label for="fname">Full Name</label>
                        </div>
                        
                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" name="position" id="position" class="form-control" list="posList">
                            <label for="position">Position</label>
                            <datalist id="posList">
                                <option value="Admin">
                                <option value="User">
                            </datalist>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" name="username" id="username" class="form-control">
                            <label for="username">Username</label>
                        </div>

                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" name="password" id="password" class="form-control" maxlength = "20" minlength = "8">
                            <label for="password">Password</label>
                        </div>
        
                        <div class="md-form form-sm">
                            <i class="fa fa-lock prefix"></i>
                            <input type="password" name="cpassword" id="cpassword" class="form-control" maxlength = "20" minlength = "8">
                            <label for="cpassword">Confirm password</label>
                        </div>
        
    

                    <div class="md-form form-sm">
                            <i class="fa fa-envelope prefix"></i>
                            <input type="text" name="office" id="office" class="form-control" list="offList">
                            <label for="office">Office</label>
                            <datalist id="offList">
                                <option value="Accounting">
                                <option value="Supply">
                                <option value="HR">
                            </datalist>
                    </div>

                        <div class="text-center mt-2">
                            <button type="submit" class="btn btn-info mb-2" name="addEmp" ng-click="addEmp();" >Add Employee<i class="fa fa-sign-in ml-1"></i></button>
                        </div>
        
                    </div>
                </form> 
            </div>
        </div>
    </div>
    <!--Modal: Register Form-->

    <!--Modal: Modal Remove form-->
    <div class="modal fade" id="modalRem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-notify modal-warning" role="document">
        <!--Content-->
        <div class="modal-content">

            <!--Header-->
            <div class="modal-header">
                <h4 class="title"><i class="fa fa-pencil"></i>Remove Form</h4>
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <!--Body-->
            <div class="modal-body mb-0">
                <div class="md-form form-sm">
                    <i class="fa fa-envelope prefix"></i>
                    <input type="text" id="form19" class="form-control">
                    <label for="form19">Name of Employee</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-tag prefix"></i>
                    <input type="text" id="form21" class="form-control">
                    <label for="form21">Date</label>
                </div>

                <div class="md-form form-sm">
                    <i class="fa fa-pencil prefix"></i>
                    <textarea type="text" id="form8" class="md-textarea mb-0"></textarea>
                    <label for="form8">Reason of removal</label>
                </div>

                <div class="text-center mt-1-half">
                    <button class="btn btn-info mb-2" data-toggle="modal" data-target="#modalConfirmRem" >Remove<i class="fa fa-send ml-1"></i></button>
                </div>

            </div>
        </div>
        <!--/.Content-->
    </div>
</div>
<!--Modal: Modal Remove form-->
    

<!--Modal: modalConfirmDelete-->
<div class="modal fade" id="modalConfirmRem" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <button class="btn btn-outline-secondary-modal">Yes</button>
                    <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: modalConfirmDelete-->

    <!--Modal: modalConfirmLogout-->
<div class="modal fade" id="modalConfirmLog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-notify modal-warning" role="document">
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
                    <button class="btn btn-outline-secondary-modal" ng-click="logout();">Yes</button> <button type="button" class="btn  btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                </div>
            </div>
            <!--/.Content-->
        </div>
    </div>
    <!--Modal: modalConfirmDelete-->

                                        <!-- MODALS -->
	
    <div class="card">  
        <div class="card-body">
            <div class="table-wrapper-2">
                <table class="table table-hover table-responsive-md table-fixed">
                    <thead >
                        <tr>
                            <th>Full Name</th>
                            <th>Position</th>
                            <th>Username</th>
                            <th>Office</th>
                            <th>Action</th>
                            
                        </tr>
                    </thead>
                    <tbody class="tableacc" id="table">
                        <tr id="accounts">
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="position-fixed">
   
    <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#modalReg" ><i class="fa fa-plus" aria-hidden="true"></i> Add an employee</button>
    <button class="btn btn-primary" ng-click="delete();">clear </button>

    </div>

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
                    <!-- <div class="modal-footer" ng-hide="closeOnly">
                        <button ng-click="processOrder(); orderInfo = false;" type="button" class="btn btn-success" data-dismiss="modal">Ok</button>
                        <button ng-click="orderInfo = false" type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    </div>
                    <div class="modal-footer" ng-show="closeOnly">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Ok</button>
                    </div> -->
                </div>
                                        <!-- Modal MessageBox -->

    <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>

</body>
</html>