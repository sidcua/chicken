<?php
    session_start();
    include '../../php/connect.php';

    header('Content-type: application/json'); 

    $username = trim($_POST['username']);

    date_default_timezone_set('Asia/Manila');
    $ename = $_POST['empname'];
    $tdate = date('m-d-Y h:i:sa');
    $remarks = $_POST['remarks'];
    
    mysqli_query($con, "INSERT INTO emphistory(name,reason,date,status) VALUES('$ename','$remarks','$tdate',0)");
    $query = "DELETE from account WHERE username = '$username'"; 
    mysqli_query($con, $query);

    $send['titles'] = "Employee Decline";
    $send['message'] = "Employee has been declined!";
    $send['remove'] = true;

    echo json_encode($send);
?>  