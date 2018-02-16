<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];
	function trans($name, $transaction, $remark, $con){
		$query = "INSERT INTO stock (item, transaction, remark) VALUES ('$name', '$transaction', '$remark')";
		mysqli_query($con, $query);
	}
	if($action == "listitem"){
		$output = "";
		$query = "SELECT * FROM item ORDER BY name ASC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= 
			'<tr><td colspan="4" class="text-center h1-responsive">No Items Found</td></tr>';
		}
		else{
			while($fetch = mysqli_fetch_assoc($result)){
				$itemid = $fetch['itemID'];
				$name = $fetch['name'];
				$price = $fetch['price'];
				$quantity = $fetch['quantity'];
				$output .= 
				'<tr data-id="'.$itemid.'">
					<td width="30%" class="name">'.$name.'</td>
					<td class="price">'.$price.'</td>
					<td class="quantity">'.$quantity.'</td>
					<td width="20%"><a><span data-toggle="modal" data-target="#modalincreasequantity" class="badge badge-default"><i class="fa fa-plus fa-2x" aria-hidden="true"></i></span></a> <a><span data-toggle="modal" data-target="#modaldecreasequantity" class="badge badge-default"><i class="fa fa-minus fa-2x" aria-hidden="true"></i></span></a> <a><span data-toggle="modal" data-target="#modaledititem" class="badge badge-warning edititem"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span></a> <a><span data-toggle="modal" data-target="#modaldeleteitem" class="badge badge-danger"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></span></a></td>
				</tr>';
			}
		}
		echo json_encode($output);
	}
	if($action == "additem"){
		$name = mysqli_escape_string($con, $_POST['name']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		$price = mysqli_escape_string($con, $_POST['price']);
		$query = "SELECT itemID FROM item WHERE name = '$name'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) != 0){
			echo json_encode(false);
		}
		else{
			$query = "INSERT INTO item (name, price, quantity) VALUES ('$name', '$price', '$quantity')";
			mysqli_query($con, $query);
			trans($name, $quantity, "New Stock", $con);
			echo json_encode(true);
		}
	}
	if($action == "deleteitem"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$query = "SELECT name FROM item WHERE itemID = '$itemid'";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_assoc($result);
		$name = $fetch['name'];
		$query = "DELETE FROM item WHERE itemID = '$itemid'";
		mysqli_query($con, $query);
		trans($name, "", "Remove Stock", $con);
	}
	if($action == "edititem"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$name = mysqli_escape_string($con, $_POST['name']);
		$price = mysqli_escape_string($con, $_POST['price']);
		$query = "SELECT itemID FROM item WHERE name = '$name' AND itemID != '$itemid'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0){
			echo json_encode(false);
		}
		else{
			$query = "UPDATE item SET name = '$name', price = '$price' WHERE itemID = '$itemid'";
			mysqli_query($con, $query);
			trans($name, $price, "Edit Stock", $con);
			echo json_encode(true);
		}
	}
	if($action == "increasequantity"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		$change = $quantity;
		$query = "SELECT name, quantity FROM item WHERE itemID = '$itemid'";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_assoc($result);
		$oldquantity = $fetch['quantity'];
		$name = $fetch['name'];
		$quantity = $quantity + $oldquantity;
		$query = "UPDATE item SET quantity = '$quantity' WHERE itemID = '$itemid'";
		mysqli_query($con, $query);
		trans($name, $change, "Stock-In", $con);
	}
	if($action == "decreasequantity"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		$change = $quantity;
		$query = "SELECT name, quantity FROM item WHERE itemID = '$itemid'";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_assoc($result);
		$oldquantity = $fetch['quantity'];
		$name = $fetch['name'];
		if($oldquantity < $quantity){
			echo json_encode(false);
		}
		else{
			$quantity = $oldquantity - $quantity;
			$query = "UPDATE item SET quantity = '$quantity' WHERE itemID = '$itemid'";
			mysqli_query($con, $query);
			trans($name, $change, "Stock-Out", $con);
			echo json_encode(true);
		}
	}
?>