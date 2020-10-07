<?php
	SESSION_START();
	include_once 'connection.php';
	$user_name = $_SESSION['UserName'];
	$create = "INSERT INTO user(User_name, Balance) VALUES ('$user_name',2000)";
	$result = mysqli_query($con,$create);

	header("LOcATION: select_option.php");
?>