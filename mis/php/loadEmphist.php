<?php
    session_start();
    include '../../php/connect.php';
    header('Content-type: application/json'); 
    
   
    $sql2 = "SELECT * FROM emphistory";
    $counter = 0;
    $send[0]['lenss'] = 0;

        $result2= mysqli_query($con,$sql2);
        if ($result2->num_rows > 0) {
            // output data rows2
                while($row2 = $result2->fetch_assoc()) {
                $send[$counter]["idhist"] = $row2["histID"];            
                $send[$counter]["empname"] = $row2["name"];
                $send[$counter]["empreason"] = $row2["reason"];
                $send[$counter]["empdate"] = $row2["date"];
                if($row2["status"] == 1){
                    $send[$counter]["empstats"] = "Removed";
                }else{
                    $send[$counter]["empstats"] = "Declined";
                }
                $counter+= 1;
                $send[$counter]['lenss'] = $counter;
            }
        }else{
            $send[0]['lenss'] = 10; 
        }
    echo json_encode($send);
?>