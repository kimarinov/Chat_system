<?php
	include 'includes/header.php';
	session_start();
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user_name=check_input($_POST['user_name']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$user_name)) {
			$_SESSION['sign_msg'] = "Username should not contain space and special characters!"; 
			header('location: sign_up.php');
		}
		else{
			
		$username=$user_name;
		
		$password = check_input($_POST['password']);
		$md5_password=md5($password);
		$name = check_input($_POST['name']);
		
		$insurt_query = "insert into `users` (user_first_name, user_name, password, user_type) values ('$name', '$username', '$md5_password',2)";
		mysqli_query($conn, $insurt_query);
		
		
		$_SESSION['msg'] = "Sign up successful. You may login now!"; 
		header('location: index.php');
		}
	}

?>