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
			<li><a href="#account" data-toggle="modal"><span class="glyphicon glyphicon-lock"></span> <?php echo "user"; ?></a></li>
			<li class="dropdown">
				<a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
						<li class="divider"></li>
                        <li><a href="#logout" data-toggle="modal"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>

                    </ul>
			</li>
		</ul> 
    </div>
</nav>

