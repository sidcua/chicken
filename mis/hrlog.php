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
        <h1 class="h1-responsive">Human Resource</h1>
        <hr class="my-2">
    </div>
</div>
    <div class="col-md-5 offset-1">  
        <h3><strong>{{ Hr }} <br>
        {{ Supply }} <br>
        {{ Accounting }}</strong></h3>
    </div>
    <br>
    <div class="container">
        <ul class="nav nav-tabs nav-justified">
           <li class="nav-item">
                <a class="nav-link active" style="margin-left:50px;" data-toggle="tab" href="#panel1" role="tab">Employee List</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"  style="margin-left:50px;" data-toggle="tab" href="#panel2" role="tab">Employee History</a>
            </li>
        </ul>
    </div>
    <br>

    <div class="tab-content card">
            <!--Panel 1-->
        
         <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
             <div class="card col-md-12" style="background-color:#1F2739;"> 
                    <div class="d-flex justify-content-end">
                        <div class="d-flex flex-row">
                            <label for="slctemp" class="white-text" style="margin-right: 20px;">Print Employees</label>
                            <select id="slctemp" class="form-control bg-white">
                                <option value="All">All</option>
                                <option value="Accounting">Accounting</option>
                                <option value="HR">HR</option>
                                <option value="Supply">Supply</option>
                            </select>
                        </div>
                    <button type="button" onclick="printemplist()" class="btn btn-outline-info waves-effect"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                </div>
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
                    <tbody class="tableacc" id="tableacc" >
                    <tr id="haccounts">
                    </tr>
                        <tr class='hname' ng-repeat="person2 in accounts2">
                            <td> {{ person2.name2 }} </td>
                            <td> {{ person2.position2 }} </td>
                            <td><span> {{ person2.username2 }} </span></td>
                            <td> {{ person2.office2 }} </td>
                        </tr>
                    </tbody>
                    </table>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <!--Panel 1-->

            <!--Panel 2-->
            <div class="tab-pane fade" id="panel2" role="tabpanel">
                <div class="card col-md-12" style="background-color:#1F2739;"> 
                     <div class="d-flex justify-content-end">
                    <button type="button" onclick="printemphist()" class="btn btn-outline-info waves-effect"><i class="fa fa-print" aria-hidden="true"></i> Print</button>
                </div>
                    <div class="card-body" style="background-color:#1F2739;">
                        <div class="table-wrapper-2">

                            <table class="table table-responsive-md table-fixed" style="background-color:#929FBA;">
                            <thead>
                                <tr>
                                    <th><h1>Name</h1></th>
                                    <th><h1>Reason</h1></th>
                                    <th><h1>Date</h1></th>
                                    <th><h1>Status</h1></th>
                                </tr>
                            </thead>
                            <tbody class="tableemphist" id="tableemphist" >
                            <tr id="emphist">
                            </tr>
                                <tr class='emname' ng-repeat="person3 in accounts3">
                                    <td> {{ person3.empname }} </td>
                                    <td> {{ person3.empreason }} </td>
                                    <td><span> {{ person3.empdate }} </span></td>
                                    <td> {{ person3.empstatus }} </td>
                                </tr>
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

</body>
</html>
<script>
    function printemplist(){
        var emp = $("#slctemp").val();
        window.open("print.php?print=emplist&emp=" + emp);
    }
    function printemphist(){
        window.open("print.php?print=emphist")
    }
</script>