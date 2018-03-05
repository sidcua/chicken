<?php
    if($_SESSION['office'] != $_SESSION['dept']){
        if($_SESSION['office'] == "Supply"){
            header("location: ../supply/");
        }
        else if($_SESSION['office'] == "Accounting"){
            header("location: ../accounting/");
        }
        else if($_SESSION['office'] == "HR"){
            header("location: ../hr/");
        }
        else if($_SESSION['office'] == "MIS"){
            header("location: ../mis/");
        }
    }
?>