<?php
    session_start();
    include '../../php/connect.php';

    header('Content-type: application/json'); 

    $username = $_POST['username'];

    date_default_timezone_set('Asia/Manila');
    $ename = $_POST['empname'];
    $tdate = date('m-d-Y h:i:sa');
    $reason = $_POST['reason'];

    
    mysqli_query($con, "INSERT INTO emphistory(name,reason,date) VALUES('$ename','$reason','$tdate')");
    $query = "DELETE from account WHERE username = '$username'"; 
    mysqli_query($con, $query);

    $send['titles'] = "Employee Removed";
    $send['message'] = "Employee has been removed!";
    $send['remove'] = true;

    echo json_encode($send);
?>