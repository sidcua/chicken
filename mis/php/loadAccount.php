<?php
    session_start();
    include '../../php/connect.php';
    header('Content-type: application/json'); 
    
   
    $sql = "SELECT * FROM account WHERE office != 'MIS' AND status = 0";
    
    $result = mysqli_query($con,$sql);
    $counter = 0;
    $send = "";
    $send[0]['lens'] = 0; 
    
    if ($result->num_rows > 0) {
    // output data rows
        while($row = $result->fetch_assoc()) {
        $send[$counter]["idacc"] = $row["accID"];            
        $send[$counter]["nam"] = $row["name"];
        $send[$counter]["position"] = $row["position"];
        $send[$counter]["username"] = $row["username"];
        $send[$counter]["office"] = $row["office"];
        // $send[$counter]["stats"] = $row["status"];
        if($row["status"] == 0){
            $send[$counter]["stats"] = "Pending";
        }else{
            $send[$counter]["stats"] = "Approved";
        }
        $send[$counter]['lens'] = $counter;
        $counter+= 1;
       }
    }else{
        $send[0]['lens'] = 10; 
        
    }
    echo json_encode($send);
?>