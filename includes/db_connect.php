<?php 
$conn = mysqli_connect('localhost','root', '' ,'chat_aplication');

if (!$conn) {
	die("Connect feiled ". mysqli_connect_error($onn));
}

 ?>