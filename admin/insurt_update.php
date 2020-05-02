<?php
include '../includes/header.php';


$user_name = $_POST['user_name'];
$user_first_name = $_POST['name'];
$password = $_POST['password'];
$id = intval($_POST['id']);

$password=md5($password);
$insurt_query = "UPDATE `users` SET `user_first_name`= '$user_first_name',`user_name`='$user_name',`password`='$password' WHERE `user_id`= $id";

$result = mysqli_query($conn, $insurt_query);
if($result){
	header('Location: users.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}
