<?php  
	include "connect.php";
	$action = $_POST['action'];

	if($action == "login"){
		$username = mysqli_escape_string($con, $_POST['username']);
		$password = mysqli_escape_string($con, $_POST['password']);
		$query = "SELECT * FROM account WHERE username = '$username' AND password = '$password'";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result) > 0){
			$fetch = mysqli_fetch_assoc($result);
			$_SESSION['accID'] = $fetch['accID'];
			$_SESSION['name'] = $fetch['name'];
			$_SESSION['position'] = $fetch['position'];
			echo json_encode(true);
		}
		else{
			echo json_encode(false);
		}
	}
?>