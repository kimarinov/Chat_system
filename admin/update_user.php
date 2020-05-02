<?php 
$title = 'update users';
include '../includes/header.php';
include '../includes/navbar_admin.php';

$id = $_GET['id'];

$select_query = "SELECT u.user_first_name,u.user_name,u.password,t.user_type FROM `users` u JOIN user_types t ON u.user_type=t.user_id WHERE u.user_id=".$id;
$select_rezult = mysqli_query($conn, $select_query);

if( $select_rezult ){
	$row = mysqli_fetch_assoc($select_rezult);
}

$read_user_types = "SELECT user_type as USER_TYPE FROM `user_types`";
$user_types_result = mysqli_query($conn, $read_user_types);
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
			<form action="" method="post" >
				<tr>
				<td><input type="text" name="name" value="<?= $row['user_first_name'] ?>"></td>
				<td><input type="text" name="user_name" value="<?= $row['user_name'] ?>"></td>
				<td><input type="text" name="password" value="<?= $row['password'] ?>"></td>
				<td>
					<select name="user_type" class="form-control">
						<?php 
							$selected ='';
							$count = 0;
							while($row_user = mysqli_fetch_assoc($user_types_result)){
								if( $row_user['t.user_type'] == $row['USER_TYPE']){
									$selected ="selected=true";
									echo "asdasdas";
									
								}
							?>
							<option value=""  <?= $selected ?> > <?=$row_user['USER_TYPE']; ?></option>
							<?php  
							}
						?>
					</select>
				</td>	
				<input type="submit" name="submit" value="save" class="btn btn-success">
			</form>
			

			</tr>

        </tbody>
    </table>                     
</div>

<?php 
var_dump($selected);
var_dump($row['user_type']);
//var_dump($_POST['user_type']);
echo ($count);


 ?>