<?php  
	session_start();
	include 'connect.php';
	$action = $_POST['action'];

	if($action == "listtransaction"){
		$output = "";
		$query = "SELECT * FROM stock ORDER BY transID DESC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= 
			'<tr><td colspan="3" class="text-center h1-responsive">No Transactions</td></tr>';
		}
		else{
			while($fetch = mysqli_fetch_assoc($result)){
				$item = $fetch['item'];
				$transaction = $fetch['transaction'];
				$remark = $fetch['remark'];
				$output .=
				'<tr>
					<td>'.$item.'</td>
					<td>'.$transaction.'</td>
					<td>'.$remark.'</td>
				</tr>';
			}
		}
		echo json_encode($output);
	}
	if($action == "cleartransaction"){
		$query = "DELETE FROM stock";
		mysqli_query($con, $query);
	}
	if($action == "totaltransaction"){
		$query = "SELECT COUNT(transID) AS total FROM stock";
		$result = mysqli_query($con, $query);
		$fetch = mysqli_fetch_assoc($result);
		$total = $fetch['total'];
		echo json_encode($total);
	}
?>