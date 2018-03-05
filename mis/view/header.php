
 <!--Navbar-->
 <nav class="navbar navbar-expand-lg navbar-dark fixed-top scrolling-navbar" style="background-color:#929FBA;">
 <div class="container">
     <a class="navbar-brand" href="#">Chicken Dinner</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
         aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav mr-auto">
             <li class="nav-item active">
                 <a class="nav-link" href="./">Home
                     <span class="sr-only">(current)</span>
                 </a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="./transactions.php">Transactions</a>
             </li>
        <li class="nav-item btn-group">
             <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Offices
             </a>
             <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
             <a class="dropdown-item" href="./supplylog.php">Supply</a>
             <a class="dropdown-item" href="./accountinglog.php">Accounting</a>
             <a class="dropdown-item" href="./hrlog.php">Human Resource</a>                        </div>
         </li>
            <li class="nav-item">
                 <a class="nav-link" href="./records.php">Records</a>
             </li>
             

             <!-- <li class="nav-item btn-group">
                 <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown
                 </a>
                 <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                     <a class="dropdown-item" href="#">Action</a>
                     <a class="dropdown-item" href="#">Another action</a>
                     <a class="dropdown-item" href="#">Something else here</a>
                 </div>
             </li> -->
         </ul>
     <ul class="navbar-nav ml-auto d-flex flex-row">
         <li class="nav-item">
             <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
             <strong><span class="mr-lg-2" style='color:white' id="pname"></strong></span>                 
             </a>
             <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                 <a class="dropdown-item waves-effect waves-light" aria-hidden="false" data-toggle="modal" data-target="#modalConfirmLog" >Logout</a>
             </div>
         </li>
     </ul>
     </div>
 </div>
</nav>

<!--/.Navbar-->
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
                        <button class="btn btn-outline-secondary-modal" ng-click="logout();">Yes</button> <button type="button" class="btn btn-primary-modal waves-effect" data-dismiss="modal">No</button>
                    </div>
                </div>
                <!--/.Content-->
            </div>
        </div>
        <!--Modal: modalConfirmLogout-->