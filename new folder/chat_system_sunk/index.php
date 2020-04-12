<?php 
include 'includes/header.php';

?>

<div class="container">
	<div id="login_form" class="well">
		<h2><center><span class="glyphicon glyphicon-lock"></span> Please Login</center></h2>
		<hr>
		<form method="POST" action="login.php">
		Username: <input type="text" name="user_name" class="form-control" required>
		<div style="height: 10px;"></div>		
		Password: <input type="password" name="password" class="form-control" required> 
		<div style="height: 10px;"></div>
		<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-log-in"></span> Login</button> No account? <a href="signup.php"> Sign up</a>
		</form>
<<<<<<< HEAD
			<center>
			<?php
				session_start();
=======

			<center>
			<?php
				
>>>>>>> parent of fe80a4f... sun
				if(isset($_SESSION['msg'])){
					echo $_SESSION['msg'];
					unset($_SESSION['msg']);
				}
			?>
			</center>
<<<<<<< HEAD
	</div>
</div>

=======
		</div>
	</div>
</div>
>>>>>>> parent of fe80a4f... sun
