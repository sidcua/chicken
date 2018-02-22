<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];
	function trans($name, $transaction, $remark, $con){
		$query = "INSERT INTO stock (item, transaction, remark) VALUES ('$name', '$transaction', '$remark')";
		mysqli_query($con, $query);
	}
	function expense($name, $price, $quantity, $con){
		$query = "SELECT item FROM expense WHERE item = '$name'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$query = "INSERT INTO expense (item, price, quantity) VALUES ('$name', '$price', '$quantity')";
		}
		else{
			$query = "UPDATE expense SET quantity = '$quantity', price = '$price' WHERE item = '$name'";	
		}
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
					<td width="20%"><a><span data-toggle="modal" data-target="#modaldistributeitem" class="badge badge-default"><i class="fa fa-cubes fa-2x" aria-hidden="true"></i></span></a></td>
				</tr>';
			}
		}
		echo json_encode($output);
	}
	if($action == "loaddistribution"){
		$output = "";
		$type = mysqli_escape_string($con, $_POST['type']);
		if($type == "Office"){
			$output .= 
			'<option value="HR">HR</option>
			<option value="Supply">Supply</option>
			<option value="Accounting">Accounting</option>
			<option value="MIS">MIS</option>';
		}
		else{
			$query = "SELECT name FROM account ORDER BY name ASC";
			$result = mysqli_query($con, $query);
			if(mysqli_num_rows($result) != 0){
				while($fetch = mysqli_fetch_assoc($result)){
					$name = $fetch['name'];
					$output .=
					'<option>'.$name.'</option>';
				}
			}
		}
		echo json_encode($output);
	}
	function checkquantity($itemid, $quantity, $con){
		$query = "SELECT quantity FROM item WHERE itemID = '$itemid'";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_assoc($result);
		$oldquantity = $fetch['quantity'];
		if($quantity > $oldquantity){
			return false;
		}
		else{
			return true;
		}
	}
	if($action == "distribute_office"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$office = mysqli_escape_string($con, $_POST['office']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		if(checkquantity($itemid, $quantity, $con) == false){
			echo json_encode(false);
		}
		else{
			$query = "SELECT name, quantity, price FROM item WHERE itemID = '$itemid'";
			$result = mysqli_query($con, $query);
			$fetch = mysqli_fetch_assoc($result);
			$oldquantity = $fetch['quantity'];
			$name = $fetch['name'];
			$quantity = $oldquantity - $quantity;
			$query = "UPDATE item SET quantity = '$quantity' WHERE itemID = '$itemid'";
			mysqli_query($con, $query);
			trans($name, $quantity, "Distributed to ".$office, $con
			expense($name, $price, );
			echo json_encode(true);
		}
	}
	if($action == "distribute_account"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$accname = mysqli_escape_string($con, $_POST['name']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		if(checkquantity($itemid, $quantity, $con) == false){
			echo json_encode(false);
		}
		else{
			$query = "SELECT name, quantity FROM item WHERE itemID = '$itemid'";
			$result = mysqli_query($con, $query);
			$fetch = mysqli_fetch_assoc($result);
			$oldquantity = $fetch['quantity'];
			$name = $fetch['name'];
			$quantity = $oldquantity - $quantity;
			$query = "UPDATE item SET quantity = '$quantity' WHERE itemID = '$itemid'";
			mysqli_query($con, $query);
			trans($name, $quantity, "Distributed to ".$accname, $con);
			echo json_encode(true);
		}
	}
?>