<?php
	SESSION_START();
	include_once 'connection.php';
	$user_name = $_SESSION['UserName'];
	$amtpay = $_POST['Amounttopay'];
	$crdnumber = $_POST['crdnumber'];
	$nameoncard = $_POST['nameoncard'];
	$cvv = $_POST['cvv'];
	$expiry = $_POST['expiry'];
	$cardtype = $_POST['cardselect'];


	$select = "SELECT Balance FROM user WHERE User_name = '$user_name'";
	$result = mysqli_query($con,$select);
	foreach($result as $value)
	{
		$balance = $value['Balance'];
	}

	if($cardtype!=null and $cvv == '125' and $expiry == '12/2030' and $crdnumber == '0000 0000 0025 0010'  and $nameoncard == 'Mr.Xyz')
	{
		$balance = $balance + $amtpay;
		
		$update = "UPDATE user SET Balance = $balance";
		$upd_result = mysqli_query($con,$update);

		$insert = "INSERT INTO user_invoice(User_Name,Reason,Amount) VALUES ('$user_name','Balance Added',$amtpay)";
		$ins_result = mysqli_query($con,$insert);
		header("LOCATION:balance_added.php"); 	
	}

	else
	{
		header("LOCATION:balance_notadded.php");
	}		
?>