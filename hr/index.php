<!DOCTYPE html>
<html>
<head>
    <title>Human Resource</title>
    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
	<link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
	<link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/hr.js"></script>

</head>
<body ng-app="appHR" ng-controller="ctrlHR" ng-init="refresh();">
                   
<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-dark indigo">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Chicken Dinner</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Manage Employee</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="ae" href="#">Add Employee</a>
                    <a class="dropdown-item" href="#">Employed</a>
                    <a class="dropdown-item" href="#">Unemployed</a>
                    <a class="dropdown-item" href="#">Employee Logs</a>
                </div>
            </li>
        </ul>
    
        <!-- Logout form -->
        <form class="form-inline">
                
        <span class="mr-lg-2" style='color:white' id="pname"></span><span class="fa fa-power-off" aria-hidden="false" ng-click="logout();"></span>
     </form>
    </div>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->
    <!-- Search form -->
    <form class="form-inline">
                
        <input class="form-control mr-lg-8" type="text" style='color:black' style='text-align:right'   placeholder="Search" aria-label="Search">
     </form>

<button class="btn btn-primary" ng-click="delete();">delete </button>
    <div class="card">
        <div class="card-body">

            <table class="table table-hover table-responsive-md table-fixed">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Position</th>
                        <th>Username</th>
                        <th>Level</th>
                        <th>Office</th>
                        <th>Status</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody id="table">
                    <tr id="accounts">
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
    
    <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="js/mdb/mdb.js"></script>
	<script type="text/javascript" src="js/mdb/bootstrap.js"></script>
	<script type="text/javascript" src="js/mdb/popper.min.js"></script>
	
</body>
</html>