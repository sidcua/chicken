<?php

    session_start();
    include '../../php/connect.php';


        $sql2 = "SELECT * FROM account WHERE office != 'MIS' AND status = 1";
        $counter = 0;

        $result2 = mysqli_query($con,$sql2);        
        if ($result2->num_rows > 0) {
        // output data rows
            while($row2 = $result2->fetch_assoc()) {
            // $send[$counter]["idacc"] = $row2["accID"];            
            $send[$counter]["nam2"] = $row2["name"];
            $send[$counter]["position2"] = $row2["position"];
            $send[$counter]["username2"] = $row2["username"];
            $send[$counter]["office2"] = $row2["office"];
            $counter+= 1;
           }
        }

        echo json_encode($send);
?>