<?php 
$conn = mysqli_connect('localhost','root', '' ,'chat_');

if (!$conn) {
	die("Connect feiled ". mysqli_connect_error($conn));
}

 ?>