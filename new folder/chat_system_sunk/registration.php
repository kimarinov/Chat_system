<<<<<<< HEAD
<?php
	include 'includes/header.php';
	session_start();
	
	var_dump($user_name);
	function check_input($data) {
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	var_dump($_POST);
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$user_name=check_input($_POST['username']);
		
		if (!preg_match("/^[a-zA-Z0-9_]*$/",$username)) {
			$_SESSION['sign_msg'] = "Username should not contain space and special characters!"; 
			header('location: signup.php');
		}
		else{
			
		$fusername=$username;
		
		$password = check_input($_POST["password"]);
		$fpassword=md5($password);
		$fname = check_input($_POST["name"]);
		
		mysqli_query($conn,"insert into `user` (uname, username, password, access) values ('$fname', '$fusername', '$fpassword', '2')");
		
		$_SESSION['msg'] = "Sign up successful. You may login now!"; 
		header('location: index.php');
		}
	}
<<<<<<< HEAD

?>
=======
<?php 
include 'includes/header.php';
>>>>>>> parent of fe80a4f... sun
=======
?>
>>>>>>> parent of 5a6fb78... sunk
