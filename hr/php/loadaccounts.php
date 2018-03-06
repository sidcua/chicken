<?php
    session_start();
    include '../../php/connect.php';
    header('Content-type: application/json'); 
    
   
    $sql = "SELECT * FROM account WHERE office != 'MIS' AND status = 1";
    $sql2 = "SELECT * FROM emphistory";
    $result = mysqli_query($con,$sql);
    $counter = 0;
    $send[0]['len'] = 0;
    $send[0]['lens'] = 0;
    if ($result->num_rows > 0) {
    // output data rows
        while($row = $result->fetch_assoc()) {
        $send[$counter]["idacc"] = $row["accID"];            
        $send[$counter]["nam"] = $row["name"];
        $send[$counter]["position"] = $row["position"];
        $send[$counter]["username"] = $row["username"];
        $send[$counter]["office"] = $row["office"];
        $send[$counter]["date2"] = $row["date"];        
        $send[$counter]["stats"] = "Approved";
        $counter+= 1;
        $send[0]["len"] = $counter;
       }
}
        $counter = 0;

        $result2= mysqli_query($con,$sql2);
        if ($result2->num_rows > 0) {
            // output data rows2
                while($row2 = $result2->fetch_assoc()) {
                $send[$counter]["idhist"] = $row2["histID"];            
                $send[$counter]["nam2"] = $row2["name"];
                $send[$counter]["reason"] = $row2["reason"];
                $send[$counter]["date"] = $row2["date"];
                if($row2["status"] == 1){
                    $send[$counter]["stats2"] = "Removed";
                }else{
                    $send[$counter]["stats2"] = "Declined";
                }
                $counter+= 1;
                $send[$counter]['lens'] = $counter;
            }
        }else{
            $send[0]['lens'] = 10; 
        }
    echo json_encode($send);
?>