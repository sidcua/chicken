<?php
    session_start();
    include '../../php/connect.php';

    header('Content-type: application/json'); 

    $username = trim($_POST['username']);

    $efname = $_POST['efname'];
    $eposition = $_POST['eposition'];
    $eoffice = $_POST['eoffice'];

    $query = "UPDATE `account` SET `name`='$efname',`position`='$eposition',`office`='$eoffice' WHERE username = '$username'";
    mysqli_query($con, $query);

    $send['titles'] = "Employee Updated";
    $send['message'] = "Employee profile has been updated!";
    $send['remove'] = true;

    echo json_encode($send);
    ?>