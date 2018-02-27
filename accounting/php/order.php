<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];
	if($action == "listorder"){
		$output = "";
		$query = "SELECT * FROM orders ORDER BY orderID ASC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= '<tr><td colspan="5"><p class="h1-responsive text-center">No orders</p></td></tr>';
		}
		else{
			while($fetch = mysqli_fetch_assoc($result)){
				$orderid = $fetch['orderID'];
				$customer = $fetch['customer'];
				$item = $fetch['item'];
				$quantity = $fetch['quantity'];
				$status = $fetch['status'];
				$output .=
				'<tr>
					<td class="orderid" hidden></td>
					<td class="customer">'.$customer.'</td>
					<td class="item">'.$item.'</td>
					<td class="quantity">'.$quantity.'</td>
					<td status="status">'.$status.'</td>
					<td></td>
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
?>