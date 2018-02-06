<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];
	if($action == "listitem"){
		$output = "";
		$query = "SELECT * FROM item ORDER BY name ASC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= 
			'<tr><td colspan="3" class="text-center h1-responsive">No Items Found</td></tr>';
		}
		else{
			while($fetch = mysqli_fetch_assoc($result)){
				$itemid = $fetch['itemID'];
				$name = $fetch['name'];
				$quantity = $fetch['quantity'];
				$output .= 
				'<tr data-id="'.$itemid.'">
					<td class="name">'.$name.'</td>
					<td class="quantity">'.$quantity.'</td>
					<td><a><span data-toggle="modal" data-target="#modaledititem" class="badge badge-warning edititem"><i class="fa fa-pencil fa-2x" aria-hidden="true"></i></span></a> <a><span data-toggle="modal" data-target="#modaldeleteitem" class="badge badge-danger"><i class="fa fa-trash-o fa-2x" aria-hidden="true"></i></span></a></td>
				</tr>';
			}
		}
		echo json_encode($output);
	}
	if($action == "additem"){
		$name = mysqli_escape_string($con, $_POST['name']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		$query = "SELECT itemID FROM item WHERE name = '$name'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) != 0){
			echo json_encode(false);
		}
		else{
			$query = "INSERT INTO item (name, quantity) VALUES ('$name', '$quantity')";
			mysqli_query($con, $query);
			echo json_encode(true);
		}
	}
	if($action == "deleteitem"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$query = "DELETE FROM item WHERE itemID = '$itemid'";
		mysqli_query($con, $query);
	}
	if($action == "edititem"){
		$itemid = mysqli_escape_string($con, $_POST['itemid']);
		$name = mysqli_escape_string($con, $_POST['name']);
		$quantity = mysqli_escape_string($con, $_POST['quantity']);
		$query = "SELECT itemID FROM item WHERE name = '$name'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0){
			echo json_encode(false);
		}
		else{
			$query = "UPDATE item SET name = '$name', quantity = '$quantity' WHERE itemID = '$itemid'";
			mysqli_query($con, $query);
			echo json_encode(true);
		}
	}
?>