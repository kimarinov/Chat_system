<nav class="navbar navbar-default">
    <div class="container-fluid">
			<div class="modal-footer">
			<?php
				if(isset($_SESSION['user_name'])){
  				  $curent_user_name = $_SESSION['user_name'];
 				  echo 'Welcome '.$_SESSION['user_name'];
  				  echo '<a href="logout.php"> Log out</a>';
				}
				$user_id = $_SESSION['user_id'];
				?>
		</div> 
    </div>
</nav>


