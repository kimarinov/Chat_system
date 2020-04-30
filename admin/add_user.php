<?php 
include '../includes/header_admin.php';
include '../includes/navbar_admin.php';
?>

	
 <div class="container">
	<div id="signup_form" class="well">
		<h2><center><span class="glyphicon glyphicon-user"></span> Sign Up</center></h2>
		<hr>
		<form method="POST" action="registration.php">
		Name: <input type="text" name="name" class="form-control" required>
		<div style="height: 10px;"></div>
		Username: <input type="text" name="user_name" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span>Create</button> 
		<a class="btn btn-primary" href="users.php" role="button"><span class="glyphicon glyphicon-remove"></span>Cancel</a> 
		</form>	
		<center>
			<?php
				session_start();

				if(isset($_SESSION['sign_msg'])){
					echo $_SESSION['sign_msg'];
					unset($_SESSION['sign_msg']);
				}
			?>
			</center>
		<div style="height: 15px;"></div>
		<div style="color: red; font-size: 15px;">

		</div>
	</div>
</div>


