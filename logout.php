<?php
    session_start();
    if(isset($_SESSION['user_name'])){
        unset($_SESSION['user_name']);
         unset($_SESSION['password']);
        header("location:index.php");
    }else{
        header("location:login.php");
    }
?>