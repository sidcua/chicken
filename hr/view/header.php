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
                <a class="nav-link" href="./">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./account.php">Accounts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./staff.php">Staffs</a>
            </li>

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Offices</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" id="ae" href="#">Accounting Office</a>
                    <a class="dropdown-item" href="#">Supply Office</a>
                </div>
            </li>
        </ul>
    
        <!-- Logout form -->
        <form class="form-inline">
                
        <span class="mr-lg-2" style='color:white' id="pname"></span><span class="fa fa-power-off" aria-hidden="false" data-toggle="modal" data-target="#modalConfirmLog"></span>
     </form>
    </div>
    <!-- Collapsible content -->
</nav>
<!--/.Navbar-->