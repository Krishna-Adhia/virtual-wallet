<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amount to Pay</title>
	<link rel="stylesheet" href="css\styles.css">
	<style>
		.select{
			border: 1px solid;
			padding: 10px;
			box-shadow: 0px 0px 10px 10px;
			width: 500px;
			height: 270px;
			border-radius: 10px;	
		}
	</style>

	<script type="text/javascript">
		function makepayment()
		{
			location.replace("make_payment.php");
		}

		function addmoney()
		{
			location.replace("add_balance.php");
		}
	</script>
</head>
<body>
	<div class="login">
		<center>
			<div class="profile_logo">
				<img src = "images\round_profile.png">				
			</div>

			<div class="name">
				<?php
					 $user_name = $_SESSION['UserName'];
				?>

				<h3><?php echo $user_name;?></h3>
			</div>

		
		<div class = "select">
			<table>
				<tr>
					<td style="background-color: #636672; height: 60px;color:white; size: 25px;"><input type = "radio" id = "soption" name="soption" onclick="makepayment();">&nbsp; &nbsp;Make a Payment</td>
				</tr>

				<tr>
					<td style="background-color: #636672; height: 60px; color:white;width: 250px;"><input type = "radio" id = "soption" name="soption" onclick="addmoney();"> &nbsp; &nbsp;Add Balance to Wallet</td>
				</tr>
			</table>

			
			<div class="buttons">
					<input type="submit" name="btn_makepayment" value = "Proceed" style="
					background-image:linear-gradient(to right, #fc6ab5, #ad77e7);
					color: white;
					font-size: 20px;
					font-weight: bold;
					font-family:Tahoma;
					height: 55px;
					width: 250px;
					border-radius: 10px;
					margin-top: 55px;">
			</div>
		</center>
	</div>
</body>
</html>