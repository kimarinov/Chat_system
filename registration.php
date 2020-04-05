<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{margin:0px; padding:0px;} 
    #main{width:400px; margin: 24px auto;}
    </style>
</head>
<body>
<?php

require_once("connection.php");

if(isset($_POST['register'])){
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    if($first_name !="" && $last_name !="" && $user_name !="" && $password !=""){
        $q = "INSERT INTO `user` (`id` , `first_name`, `last_name`, `user_name` , `password`)
        VALUES('','".$first_name."', '".$last_name."' , '".$user_name."' , '".$password."') ";

        if(mysqli_query($con,$q)){
            header("location:login.php");
        }else{
            echo "$q";
        }

    }else{
        echo "please fill all the boxes";
    }
}

?>
<div id="main">
<h2 align="center">Registration</h2>
<form method="post">
First Name : <br>
<input type="text" name = "first_name" placeholder = "First Name">
<br><br>
Last Name : <br>
<input type="text" name="last_name" placeholder = "last_name">
<br><br>
User Name : <br>
<input type="text" name="user_name" placeholder = "user name">
<br><br>
Password : <br>
<input type="password" name = "password" placeholder = "password">
<br><br>
<input type="submit" name="register" value = "Register">
</form>
</div>
</body>
</html>