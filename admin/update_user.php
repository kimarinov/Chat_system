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

?>

<div class="container">
    <div class="panel panel-default" style="height:50px;">
		<span style="font-size:18px; margin-left:10px; position:relative; top:13px;"><strong><span class="glyphicon glyphicon-user"></span>User edit</strong></span>	
	</div>
	<table width="100%" class="table table-striped table-bordered table-hover" >
        <thead>
            <tr>
                <th>Name</th>
				<th>Username</th>
				<th>Password</th>
			</tr>
		</thead>
		<tbody>
		<?php
			
			?>
		<form action="insurt_update.php" method="post" >
			<tr>
				<td><input  type="text" name="name" value="<?= $row['user_first_name'] ?>"></td>
				<td><input  type="text" name="user_name" value="<?= $row['user_name'] ?>"></td>
				<td><input class="form-control" type="text" name="password" value="<?= $row['password'] ?>"></td>	
				<td><input  type="hidden" name="id" value="<?=$id ?>"> </td>
			</tr>
        </tbody>
    </table> 
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok"></span>Update</button> 
	<a class="btn btn-default" href="users.php" role="button"><span class="glyphicon glyphicon-remove"></span>Cancel</a>
		</form>                    
</div>