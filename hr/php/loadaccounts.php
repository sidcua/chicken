<?php
    session_start();
    include '../../php/connect.php';

   
    $sql = "SELECT * FROM account";
    $sql2 = "SELECT * FROM emphistory";
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
        $counter = 0;

        $result2= mysqli_query($con,$sql2);
        if ($result2->num_rows > 0) {
            // output data rows2
                while($row2 = $result2->fetch_assoc()) {
                $send[$counter]["idhist"] = $row2["histID"];            
                $send[$counter]["nam2"] = $row2["name"];
                $send[$counter]["reason"] = $row2["reason"];
                $send[$counter]["date"] = $row2["date"];
                $counter+= 1;
                }
            }
    echo json_encode($send);
?>