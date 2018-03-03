<?php
    session_start();
    include 'connect.php';
    $action = $_POST['action'];
    if($action == "listhistory"){
        $output = "";
        $query = "SELECT * FROM orderhistory ORDER BY histID DESC";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 0){
            $output .= '<tr><td colspan="4"><p class="text-center h1-responsive">No order history</p></td></tr>';
        }
        else{
            while($fetch = mysqli_fetch_assoc($result)){
                $customer = $fetch['customer'];
                $item = $fetch['item'];
                $quantity = $fetch['quantity'];
                $remark = $fetch['remark'];
                $output .= '<tr><td>'.$customer.'</td><td>'.$item.'</td><td>'.$quantity.'</td><td>'.$remark.'</td></tr>';
            }
        }
        echo json_encode($output);
    }
    if($action == "clearhistory"){
        $query = "DELETE FROM orderhistory";
        mysqli_query($con, $query);
    }
?>