<?php 
include 'includes/header.php';
session_start();

if (isset($_POST['user_name'])) {
	$user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $password_check_query = "SELECT * FROM `user` WHERE `user_name` = '$user_name' AND `password`='$password'";
    $check_query_result = mysqli_query($conn, $password_check_query);

    if(mysqli_num_rows($check_query_result) > 0){
        $_SESSION['user_name'] = $user_name;
        echo "Succsesful log in";
        header("location:chat_room.php");
    }else{
    	 header("location:index.php");
    	 echo "string";
    }

}

 