<?php 

if(!isset($_SESSION)) 
 { 
     session_start(); 
 }

session_start();


$curent_user_name = $_SESSION['user_name'];
$user_id = $_SESSION['user_id'];
 ?>

<nav class="navbar navbar-default">
    <div class="container-fluid">
		<div class="navbar-header">
			<a class="navbar-brand" href="https://www.sourcecodester.com/user/224918/track">Chat system</a>
		</div>
		
		<ul class="nav navbar-nav">
			<li><a href="chat_room.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			<li><a href="users.php"><span class="glyphicon glyphicon-user"></span> Users</a></li>
		</ul>

		<ul class="nav navbar-nav navbar-right">
			<?php 
			echo 'Welcome '.$_SESSION['user_name'];
  			echo '<a href="logout.php"> Log out</a>';
			 ?>
		</ul> 
		
	
    </div>
</nav>










