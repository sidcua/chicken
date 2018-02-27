<?php
    session_start();
    include '../../php/connect.php';

   
    $sql = "SELECT * FROM account";
    $result = mysqli_query($con,$sql);
    $counter = 0;
    if ($result->num_rows > 0) {
    // output data rows
        while($row = $result->fetch_assoc()) {
        $send[$counter]["idacc"] = $row["accID"];            
        $send[$counter]["nam"] = $row["name"];
        $send[$counter]["position"] = $row["position"];
        $send[$counter]["username"] = $row["username"];
        $send[$counter]["office"] = $row["office"];
        $counter+= 1;
       }
    }
    echo json_encode($send);
?>