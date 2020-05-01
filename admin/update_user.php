<?php 
$title = 'update users';
include '../includes/header.php';
include '../includes/navbar_admin.php';

$id = $_GET['id'];

$select_query = "SELECT u.user_first_name,u.user_name,u.password FROM `users` u JOIN user_types t ON u.user_type=t.user_id WHERE u.user_id=".$id;
$select_rezult = mysqli_query($conn, $select_query);

if( $select_rezult ){
	$row = mysqli_fetch_assoc($select_rezult);
}

?>

<div class="col-lg-12">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-user"></span>User edit</strong></span>	
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
			
			?>
			<tr>
				<td><input type="text" name="name" value="<?= $row['user_first_name'] ?>"></td>
				<td><input type="text" name="user_name" value="<?= $row['user_name'] ?>"></td>
				<td><input type="text" name="password" value="<?= $row['password'] ?>"></td>
				<select name="cuisine_id" class="form-control">
					<option> -- select cuisine -- </option>
					<?php if( mysqli_num_rows($result) > 0 ){
						while($row = mysqli_fetch_assoc($result)){
					?>
					<option value="<?= $row['cuisine_id'] ?>" <?php if( $row['cuisine_id'] == $meal_type_row['cuisine_id']) { echo "selected=true"; } ?>><?= $row['cuisine_name'] ?></option>

					<?php 
						}
					}

					?>
				</select>
				
			

			</tr>

        </tbody>
    </table>                     
</div>