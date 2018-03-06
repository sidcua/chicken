<?php
    session_start();
    include '../../php/connect.php';
    $action = $_POST['action'];
    if($action == "listsupply"){
        $output = "";
        $query = "SELECT * FROM item ORDER BY name ASC";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 0){
            $output .= '<tr><td colspan="3"><p class="text-center">No items found</p></td></tr>';
        }
        else{
            while($fetch = $result->fetch_assoc()){
                $item = $fetch['name'];
                $price = $fetch['price'];
                $quantity = $fetch['quantity'];
                $output .= '<tr><td>'.$item.'</td><td>'.$price.'</td><td>'.$quantity.'</td></tr>';
            }
        }
        echo json_encode($output);
    }
?>