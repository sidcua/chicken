<?php
    session_start();    
    include '../../php/connect.php';

    header('Content-type: application/json'); 

        $result = mysqli_query($con, "SELECT count(*) FROM account WHERE office = 'HR' AND status = 1");
        $num_rows = mysqli_fetch_array($result);
        $total = $num_rows[0];
        $obj['hr'] = 'Total Employees in HR Office: ' . $total;
        
        $result2 = mysqli_query($con, "SELECT count(*) FROM account WHERE office = 'Supply'  AND status = 1");
        $num_rows2 = mysqli_fetch_array($result2);
        $total2 = $num_rows2[0];
        $obj['supply'] = 'Total Employees in Supply Office: ' . $total2;

        $result3 = mysqli_query($con, "SELECT count(*) FROM account WHERE office = 'Accounting'  AND status = 1");
        $num_rows3 = mysqli_fetch_array($result3);
        $total3 = $num_rows3[0];
        $obj['accounting'] = 'Total Employees in Accounting Office: ' . $total3;

        echo json_encode($obj);
?>