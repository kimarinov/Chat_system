<?php 
include '../includes/header.php';

$update_query = "UPDATE `users` SET `user_type`=1 WHERE user_id =". $_GET['id'];
$result = mysqli_query($conn, $update_query);

if($result){
	header('Location: users.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}

 ?>