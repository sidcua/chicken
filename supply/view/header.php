<nav class="navbar navbar-expand-lg navbar-dark indigo">

    <!-- Navbar brand -->
    <a class="navbar-brand" href="#">Supply</a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/chicken/supply/">Home<span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/chicken/supply/supply.php">Supply</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/chicken/supply/distribute.php">Distribute</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/chicken/supply/transaction.php">Transaction</a>
            </li>

            <!-- Dropdown -->

        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link dropdown-toggle waves-effect waves-light" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user" aria-hidden="true"></i>
                    <?php echo $_SESSION['name']; ?>                  
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item waves-effect waves-light" href="">Profile</a>
                    <a class="dropdown-item waves-effect waves-light" href="php/logout.php">Logout</a>
                </div>
            </li>
        </ul>
        <!-- Links -->

        <!-- Search form -->
    </div>
    <!-- Collapsible content -->

</nav>