<?php
    session_start();
    include 'connect.php';
    $action = $_POST['action'];
    function trans($name, $transaction, $remark, $con){
		$query = "INSERT INTO stock (item, transaction, remark) VALUES ('$name', '$transaction', '$remark')";
		mysqli_query($con, $query);
	}
    if($action == "listorder"){
        $output = "";
        $query = "SELECT orderID, customer, name, orders.quantity FROM orders INNER JOIN item ON orders.itemID = item.itemID WHERE status = 0";
        $result = mysqli_query($con, $query);
        if(mysqli_num_rows($result) == 0){
            $output .= '<td colspan="4"><p class="text-center h1-responsive">No pending orders found</p></td>';
        }
        else{
            while($fetch = mysqli_fetch_assoc($result)){
                $orderid = $fetch['orderID'];
                $customer = $fetch['customer'];
                $item = $fetch['name'];
                $quantity = $fetch['quantity'];
                $output .= '<tr data-id="'.$orderid.'"><td>'.$customer.'</td><td>'.$item.'</td><td class="quantity">'.$quantity.'</td><td><a><span data-toggle="modal" data-target="#modalreadyorder" class="badge badge-success"><i class="fa fa-check fa-2x" aria-hidden="true"></i></span></a></td></tr>';
            }
        }
        echo json_encode($output);
    }
    if($action == "readyorder"){
        $orderid = mysqli_escape_string($con, $_POST['orderid']);
        $quantity = mysqli_escape_string($con, $_POST['quantity']);
        $query = "SELECT item.quantity FROM orders INNER JOIN item ON orders.itemID = item.itemID WHERE orderID = '$orderid'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        $stock_quantity = $fetch['quantity'];
        if($stock_quantity < $quantity){
            echo json_encode(false);
        }
        else{
            $query = "UPDATE orders SET status = 1 WHERE orderID = '$orderid'";
            mysqli_query($con, $query);
            $query = "SELECT name FROM orders INNER JOIN item ON orders.itemID = item.itemID WHERE orderID = '$orderid'";
            $result = mysqli_query($con, $query);
            $fetch = mysqli_fetch_assoc($result);
            $item = $fetch['name'];
            trans($item, $quantity, 'Order Ready', $con);
            echo json_encode(true);
        }
    }
?>