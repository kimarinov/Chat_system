<?php 
include '../includes/header.php';

$update_query = "DELETE FROM `users` WHERE  user_id =". $_GET['id'];
$result = mysqli_query($conn, $update_query);

if($result){
	header('Location: users.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}

 ?>