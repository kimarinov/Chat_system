<?php 
include '../includes/header.php';
include '../includes/navbar_admin.php';
?>



		<div class="container">
		    <div class="panel panel-default" style="height:50px;">
				<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-user"></span> Users List</strong></span>
				<div class="pull-right" style="margin-right:10px; margin-top:7px;">
					<a href="add_user.php" data-toggle="modal" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> Add</a>
				</div>
			</div>
			<table width="100%" class="table table-striped table-bordered table-hover" id="userList">
		        <thead>
		            <tr>
		                <th>Name</th>
						<th>Username</th>
						<th>Password</th>
						<th>Access</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
					$query=mysqli_query($conn,"select user_first_name,user_name,password,t.user_type,u.user_id  from `users` u  JOIN user_types t on u.user_type=t.user_id order by `user_first_name` asc");
					while($row=mysqli_fetch_array($query)){
					?>
					<tr>
						<td><input type="hidden" id="ename<?php echo $row['userid']; ?>" value="<?php echo $row['user_first_name']; ?>"><?php echo $row['user_first_name']; ?></td>
						<td><input type="hidden" id="eusername<?php echo $row['userid']; ?>" value="<?php echo $row['user_name']; ?>"><?php echo $row['user_name']; ?></td>
						<td><input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['password']; ?>"><?php echo $row['password']; ?></td>
						
						<td>
							<input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['password']; ?>"><?php echo $row['user_type']; ?></td>
						</td>
						<td> <?php
						 	if ($row['user_type'] == "admin") {?>
								<a href="make_user.php?id=<?= $row['user_id'] ?>" role="button"  class="btn btn-success"><span class="glyphicon glyphicon-star-empty"></span> Make user</a> || 
							 	<?php } 
							 else{
								  	?> <a href="make_admin.php?id=<?= $row['user_id'] ?>" role="button"  class="btn btn-primary"><span class="glyphicon glyphicon-star"></span> Make admin</a> || <?php   
								}?>
								<a href="update_user.php?id=<?= $row['user_id'] ?>" role="button"  class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || 
								<a href="delete_user.php?id=<?= $row['user_id'] ?>" role="button"  class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>

						</td>
					</tr>
					<?php
					}
				?>
		        </tbody>
		    </table>                     
		</div>

