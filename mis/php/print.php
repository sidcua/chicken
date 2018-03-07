<?php
    include '../php/connect.php';
    $output = "";
    $print = mysqli_escape_string($con, $_GET['print']);
    if($print == "supply"){
        $output .= '<p class="h1-responsive text-center">Supply Items</p><br><br><table class="table">
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead><tbody>';
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
				</tr>';
			}
		}
        $output .= '</tbody></table>';
    }
    if($print == "transaction"){
        $output .= '<p class="h1-responsive text-center">Supply Transactions</p><br><br><table class="table">
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
            </tr>
        </thead><tbody>';
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
					<td width="30%">'.$item.'</td>
					<td>'.$transaction.'</td>
					<td width="40%">'.$remark.'</td>
				</tr>';
			}
		}
        $output .= '</tbody></table>';
    }
    if($print == "expense"){
        $month = mysqli_escape_string($con, $_GET['month']);
        $year = mysqli_escape_string($con, $_GET['year']);
        $output .= '<p class="h1-responsive text-center">Expense</p><br><br><table class="table">
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Item Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th>Date</th>
            </tr>
        </thead><tbody>';
		$query = "SELECT * FROM expense";
        if($month != 0 || $year != 0){
            $query .= " WHERE";
        }
        if($month != 0){
            $query .= " date LIKE '$month%'";
        }
        if($year != 0){
            $query .= " AND";
        }
        if($year != 0){
            $query .= " date LIKE '%$year'";
        }
        $query .= " ORDER BY expenseID ASC";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) == 0){
			$output .= '<tr><td colspan="5"><p class="h1-responsive text-center">No expenses found</p></td></tr>';
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
        $output .= '</tbody></table>';
    }
    if($print == "emplist"){
        $emp = mysqli_escape_string($con, $_GET['emp']);
        if($emp != "All"){
            $office_lbl = $emp;
            $emp = " WHERE office = '$emp'";
            
        }
        else{
            $emp = "";
            $office_lbl = 'All';
        }
        $query = "SELECT name, position, username, office FROM account".$emp." ORDER BY name ASC";
        $result = mysqli_query($con, $query);
        $no = mysqli_num_rows($result);
        $output .= '<p class="h1-responsive text-center">Employee List</p><br><br><table class="table">
        <p class="h4-responsive text-left">Number of Employee: '.$no.'</p>
        <p class="h4-responsive text-left">Office: '.$office_lbl.'</p>
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Username</th>
                <th>Office</th>
            </tr>
        </thead><tbody>';
        while($fetch = mysqli_fetch_assoc($result)){
            $name = $fetch['name'];
            $position = $fetch['position'];
            $username = $fetch['username'];
            $office = $fetch['office'];
            $output .= 
            '<tr><td>'.$name.'</td>
            <td>'.$position.'</td>
            <td>'.$username.'</td>
            <td>'.$office.'</td></tr>';
        }
        $output .= '</tbody></table>';
    }
    if($print == "emphist"){
        $output .= '<p class="h1-responsive text-center">Employee History</p><br><br><table class="table">
        <thead class="blue-grey lighten-4">
            <tr>
                <th>Name</th>
                <th>Reason</th>
                <th>Date</th>
                <th>Status</th>
            </tr>
        </thead><tbody>';
        $query = "SELECT * FROM emphistory ORDER BY histID DESC";
        $result = mysqli_query($con, $query);
        while($fetch = mysqli_fetch_assoc($result)){
            $name = $fetch['name'];
            $reason = $fetch['reason'];
            $date = $fetch['date'];
            $status = $fetch['status'];
            if($status == 0){
                $status = "Declined";
            }
            else{
                $status = "Removed";
            }
            $output .= 
            '<tr><td>'.$name.'</td>
            <td>'.$reason.'</td>
            <td>'.$date.'</td>
            <td>'.$status.'</td></tr>';
        }
        $output .= '</tbody></table>';
    }
?>