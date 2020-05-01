<?php 
include '../includes/header.php';

$soft_delete_query = "UPDATE `message` SET `date_deleted`= NULL WHERE id=". $_GET['id'];

$result = mysqli_query($conn, $soft_delete_query);

if($result){
	header('Location: chat_room.php');
}else {
	die('Delete failed' . mysqli_error($conn));
}

 ?>