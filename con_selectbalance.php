<?php
	include_once 'connection.php';
	$user_name = $_SESSION['UserName'];
	$select = "SELECT Balance FROM user WHERE User_name = '$user_name'";
	$result = mysqli_query($con,$select);
	foreach($result as $value)
	{
		$balance = $value['Balance'];
	}
?>