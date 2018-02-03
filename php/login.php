<?php 
	session_start();
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
			$obj['office'] = $fetch['office'];
			$obj['access'] = true;
			echo json_encode($obj);
		}
		else{
			$obj['access'] = false;
			echo json_encode($obj);
		}
	}
?>