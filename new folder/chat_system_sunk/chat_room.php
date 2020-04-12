<?php 
include 'includes/header.php';
session_start();

if(isset($_SESSION['user_name'])){

    echo 'Welcome '.$_SESSION['user_name'];
    echo '<a href="logout.php"> Log out</a><br>';
}

?>
<div id="main">
    <div id="message_area">

<?php
  

    $q1 = "SELECT * FROM `message`";
    $r1 = mysqli_query($conn,$q1);
    while($row = mysqli_fetch_assoc($r1)){
        $message = $row['message'];
        $user_name = $row['user_name'];
        echo '<h4 style="color:red">'.$user_name.'</h4>';
        echo '<p>'.$message.'</p>';
        echo '<hr>';
    }

    if(isset($_POST['message'])){
    $message = $_POST['message'];

    $q = 'INSERT INTO `message` (`id`, `message`, `user_name`)
    VALUES("","'.$message.'","'.$_SESSION['user_name'].'")';

    if(mysqli_query($conn, $q)){
        echo '<h4 style ="color:red">'.$_SESSION['user_name'].'</h4>';
        echo '<p>'.$message.'</p>';
    }
}

?>
    </div>

</div>
<div id="message_area main">
	
	 <form method="post">
    <input type="text" name = "message" style="width:370px; height:50px;" placeholder = "Type your message">
    <input type="submit" name = "submit" style="width:120px; height:50px;" value = "message">
    </form>
</div>