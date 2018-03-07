<?php
    session_start();
    $_SESSION['dept'] = "MIS";
    include '../php/checkoffice.php';
    include './php/print.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        
    </title>
    <link rel="stylesheet" type="text/css" href="css/mdb/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/mdb.css" />
    <link rel="stylesheet" type="text/css" href="css/mdb/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="css/mis.scss" />
    <script src="js//jquery/dist/jquery.min.js"></script>
    <script src="js/angular/angular.min.js"></script>
    <script src="js/mis.js"></script>

</head>
<body>
    
    
    <?php
        echo $output;
    ?>
    <script type="text/javascript" src="js/mdb/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/mdb/mdb.js"></script>
    <script type="text/javascript" src="js/mdb/bootstrap.js"></script>
    <script type="text/javascript" src="js/mdb/popper.min.js"></script>
    <script type="text/javascript" src="js/supplylog.js"></script>
</body>
</html>
<script>
    $(document).ready(function(){
        window.print();
    })
</script>