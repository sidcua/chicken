<?php


    session_start();
    include '../../php/connect.php';

    header('Content-type: application/json'); 

$username = trim($_POST['username']);


$query = "UPDATE `account` SET `status`=1 WHERE username = '$username'";
mysqli_query($con, $query);

$send['titles'] = "Employee Approve";
$send['message'] = "Employee has been approved!";
$send['approve'] = true;

echo json_encode($send);


?>