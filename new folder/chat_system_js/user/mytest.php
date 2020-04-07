<?php
	include('../conn.php');
	session_start();

	$msg=$_POST['msg'];
	var_dump($msg);
