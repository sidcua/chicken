<?php  
	session_start();
	include "connect.php";
	$action = $_POST['action'];

	if($action == "listexpense"){
        $month = mysqli_escape_string($con, $_POST['month']);
        $year = mysqli_escape_string($con, $_POST['year']);
		$query = "SELECT * FROM expense";
        if($month != 0 || $year != 0){
            $query .= " WHERE";
        }
        if($month != 0){
            $query .= " date LIKE '$month%'";
        }
        if($month != 0){
            $query .= " AND";
        }
        if($year != 0){
            $query .= " date LIKE '%$year'";
        }
        $query .= " ORDER BY expenseID ASC";
		$result = mysqli_query($con, $query);
		$output = '';
		if(mysqli_num_rows($result) == 0){
			$output .= '<td colspan="5"><p class="h1-responsive text-center">No expenses found</p></td>';
		}
		else{
			$all = 0;
			while($fetch = mysqli_fetch_assoc($result)){
				$item = $fetch['item'];
				$price = $fetch['price'];
				$quantity = $fetch['quantity'];
                $date = $fetch['date'];
				$total = $price * $quantity;
				$all += $total;
				$output .= 
				'<tr><td>'.$item.'</td>
				<td>'.$price.'</td>
				<td>'.$quantity.'</td>
				<td>'.$total.'</td>
                <td>'.$date.'</td></tr>';
			}
			$output .= '<tr><td colspan="3"></td><td>Overall Expense: '.$all.'</td><td></td></tr>';
		}
		echo json_encode($output);
	}
	if($action == "clearexpense"){
		$query = "DELETE FROM expense";
		mysqli_query($con, $query);
	}
    if($action == "inityear"){
        $latest = date('Y');
        $output = '<option value="0">All</option>';
        for($i = $latest; $i >= 2017; $i--){
            $output .= '<option value="'.$i.'">'.$i.'</td>';
        }
        echo json_encode($output);
    }
    if($action == "initmonth"){
        $output = '<option value="0">All</option>
        <option value="1">January</option>
        <option value="2">February</option>
        <option value="3">March</option>
        <option value="4">April</option>
        <option value="5">May</option>
        <option value="6">June</option>
        <option value="7">July</option>
        <option value="8">August</option>
        <option value="9">September</option>
        <option value="10">October</option>
        <option value="11">November</option>
        <option value="12">Decemeber</option>';
        echo json_encode($output);
    }
?>