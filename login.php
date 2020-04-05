<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{margin:0px; padding:0 px;}
    #main{width:200px; margin:20px auto;}
    </style>
</head>
<body>
<div id ="main">
<?php
session_start();
require_once("connection.php");

if(Isset($_POST['login'])){
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];

    $q = 'SELECT * FROM `user` where `user_name` = "'.$user_name.'" and `password`="'.$password.'"';
    $r = mysqli_query($con , $q);

    if(mysqli_num_rows($r) > 0){
        $_SESSION['user_name'] = $user_name;

        header("location:index.php");
    }else{
        echo 'your password and user name do not match';
    }

}

?>

<h2 style = "text-align:center">Login</h2>
<form method="post">
User Name:<br>
<input type="text" name="user_name" placeholder="user name" ><br><br>
Password:<br>
<input type="password" name="password" placeholder = "password"><br><br>
<input type="submit" name = "login" value = "Login">
<a href="registration.php"> Create an account </a>
</form>
</div>
</body>
</html>