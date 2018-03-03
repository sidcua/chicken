<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];
	if($action == "listorder"){
		$output = "";
		$query = "SELECT orderID, customer, name, orders.quantity, status FROM orders INNER JOIN item ON orders.itemID = item.itemID ORDER BY orderID DESC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= '<tr><td colspan="5"><p class="h1-responsive text-center">No orders</p></td></tr>';
		}
		else{
			while($fetch = mysqli_fetch_assoc($result)){
				$orderid = $fetch['orderID'];
				$customer = $fetch['customer'];
				$item = $fetch['name'];
				$quantity = $fetch['quantity'];
				$status = $fetch['status'];
                if($status == 0){
                    $status = "Pending";
                }
                else{ 
                    $status = "Ready";
                }
				$output .=
				'<tr data-id="'.$orderid.'">
					<td class="orderid" hidden></td>
					<td class="customer">'.$customer.'</td>
					<td class="item">'.$item.'</td>
					<td class="quantity">'.$quantity.'</td>
					<td status="status">'.$status.'</td>
					<td><a><span data-toggle="modal" data-target="#modalcompleteorder" class="badge badge-success"><i class="fa fa-check fa-2x" aria-hidden="true"></i></span></a> <a><span data-toggle="modal" data-target="#modaldeclineorder" class="badge badge-danger"><i class="fa fa-times fa-2x" aria-hidden="true"></i></span></a></td>
				</tr>';
			}
		}
		echo json_encode($output);
	} 
    if($action == "inititem"){
        $query = "SELECT itemID, name FROM item ORDER BY name ASC";
        $result = mysqli_query($con, $query);
        $output = '';
        while($fetch = mysqli_fetch_assoc($result)){
            $itemid = $fetch['itemID'];
            $name = $fetch['name'];
            $output .= '<option value="'.$itemid.'">'.$name.'</option>';
        }
        echo json_encode($output);
    }
    if($action == "addorder"){
        $customer = mysqli_escape_string($con, $_POST['customer']);
        $item = mysqli_escape_string($con, $_POST['item']);
        $quantity = mysqli_escape_string($con, $_POST['quantity']);
        $query = "INSERT INTO orders (customer, itemID, quantity, status) VALUES ('$customer', '$item', '$quantity', 0)";
        $result = mysqli_query($con, $query);
    }
    if($action == "declineorder"){
        $orderid = mysqli_escape_string($con, $_POST['orderid']);
        $query = "SELECT * FROM orders WHERE orderID = '$orderid'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        $customer = $fetch['customer'];
        $itemid = $fetch['itemID'];
        $quantity = $fetch['quantity'];
        $query = "SELECT name FROM item WHERE itemID = '$itemid'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        $item = $fetch['name'];
        $query = "INSERT INTO orderhistory (customer, item, quantity, remark) VALUES ('$customer', '$item', '$quantity', 'Order Decline')";
        mysqli_query($con, $query);
        $query = "DELETE FROM orders WHERE orderid = '$orderid'";
        mysqli_query($con, $query);
    }
    if($action == "completeorder"){
        $orderid = mysqli_escape_string($con, $_POST['orderid']);
        $query = "SELECT * FROM orders WHERE orderID = '$orderid'";
        $result = mysqli_query($con, $query);
        $fetch = mysqli_fetch_assoc($result);
        if($fetch['status'] == 0){
            $obj['status'] = false;
        }
        else{
            $obj['status'] = true;
            $customer = $fetch['customer'];
            $itemid = $fetch['itemID'];
            $quantity = $fetch['quantity'];
            $query = "SELECT name, quantity FROM item WHERE itemID = '$itemid'";
            $result = mysqli_query($con, $query);
            $fetch = mysqli_fetch_assoc($result);
            $oldquantity = $fetch['quantity'];
            if($oldquantity < $quantity){
                $obj['quantity'] = false;
            }
            else{
                $obj['quantity'] = true;
                $item = $fetch['name'];
                $query = "INSERT INTO orderhistory (customer, item, quantity, remark) VALUES ('$customer', '$item', '$quantity', 'Order Complete')";
                mysqli_query($con, $query);
                $quantity = $oldquantity - $quantity;
                $query = "UPDATE item SET quantity = '$quantity' WHERE itemID = '$itemid'";   
                mysqli_query($con, $query);
                $query = "DELETE FROM orders WHERE orderID = '$orderid'";
                mysqli_query($con, $query);
            }
        }
        echo json_encode($obj);
    }
?>