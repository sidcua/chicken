<?php  
	session_start();
	include "connect.php";
	$action = $_POST['action'];

	if($action == "listexpense"){
		$query = "SELECT * FROM expense ORDER BY item ASC";
		$result = mysqli_query($con, $query);
		$output = '';
		if(mysqli_num_rows($result) == 0){
			$output .= '<td colspan="4"><p class="h1-responsive text-center">No expenses found</p></td>';
		}
		else{
			$all = 0;
			while($fetch = mysqli_fetch_assoc($result)){
				$item = $fetch['item'];
				$price = $fetch['price'];
				$quantity = $fetch['quantity'];
				$total = $price * $quantity;
				$all += $total;
				$output .= 
				'<tr><td>'.$item.'</td>
				<td>'.$price.'</td>
				<td>'.$quantity.'</td>
				<td>'.$total.'</td></tr>';
			}
			$output .= '<tr><td colspan="3"></td><td>Overall Expense: '.$all.'</td></tr>';
		}
		echo json_encode($output);
	}
	if($action == "clearexpense"){
		$query = "DELETE FROM expense";
		mysqli_query($con, $query);
	}
?>