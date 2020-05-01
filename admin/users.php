<?php 
include '../includes/header.php';
include '../includes/navbar_admin.php';
?>
<div class="col-lg-12">
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
			$query=mysqli_query($conn,"select * from `users` order by `user_first_name` asc");
			while($row=mysqli_fetch_array($query)){
			?>
			<tr>
				<td><input type="hidden" id="ename<?php echo $row['userid']; ?>" value="<?php echo $row['user_first_name']; ?>"><?php echo $row['user_first_name']; ?></td>
				<td><input type="hidden" id="eusername<?php echo $row['userid']; ?>" value="<?php echo $row['user_name']; ?>"><?php echo $row['user_name']; ?></td>
				<td><input type="hidden" id="epassword<?php echo $row['userid']; ?>" value="<?php echo $row['password']; ?>"><?php echo $row['password']; ?></td>
				
				<td>
					<?php 
						if ($row['user_type']==1){
							echo "Admin";
						}
						else{
							echo "User";
						}
					?>
				</td>
				<td> 
					<a href="update_user.php?id=<?= $row['user_id'] ?>" role="button"  class="btn btn-warning"><span class="glyphicon glyphicon-pencil"></span> Edit</a> || 

					<a href="delete_msg.php?id=<?= $row['id'] ?>" role="button"  class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a>

				</td>
			</tr>
			<?php
			}
		?>
        </tbody>
    </table>                     
</div>


