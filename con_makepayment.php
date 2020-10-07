<?php
	SESSION_START();
	include_once 'connection.php';
	$user_name = $_SESSION['UserName'];
	$amtpay = $_POST['Amounttopay'];


	$select = "SELECT Balance FROM user WHERE User_name = '$user_name'";
	$result = mysqli_query($con,$select);
	foreach($result as $value)
	{
		$balance = $value['Balance'];
	}

	$balance = $balance - $amtpay;

	if($balance < 0)
	{
		header("LOCATION:payment_unsuccessful.php");
	}

	else
	{
		$update = "UPDATE user SET Balance = $balance WHERE User_name = '$user_name'";
		$upd_result = mysqli_query($con,$update);

		$insert = "INSERT INTO user_invoice(User_Name,Reason,Amount) VALUES ('$user_name','Make a Payment',$amtpay)";
		$ins_result = mysqli_query($con,$insert);

		header("LOCATION:payment_successful.php"); 	
	}
?>