<?php 
    include '../../php/connect.php';
    header('Content-type: application/json'); 

    $id = $_POST["id"];
    
    if(trim($id == '')){
        $sql = "DELETE FROM emphistory";
        mysqli_query($con,$sql);    
    }else{
        $sql = "DELETE FROM emphistory WHERE histID = '$id'";        
        mysqli_query($con,$sql);
    }
    $send['titles'] = "Employee History Deleted";
    $send['message'] = "Employee's History has been deleted";
    $send['delete'] = true;
    
    echo json_encode($send);
?>