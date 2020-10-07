<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Payment Successful</title>
	<link rel="stylesheet" href="css\styles.css">
	<style>
		.balance
		{
			border: 1px solid;
				padding: 10px;
				box-shadow: 0px 0px 10px 10px;
				width: 500px;
				height: 350px;
				border-radius: 10px;
		}
	</style>
</head>
<body>
	<div class="para">
		<div class = "row">
			<center>
				<div class="span4">
					<img src = "images\round_profile.png">

					<div class = "name">
						<h3><?php echo  $_SESSION['UserName'];?></h3>
					</div>
				</div>
			</center>
		</div>
	</div>

<center>
	<div class = "balance">
		<form action = "select_option.php">
			<table  style="padding-top: 40px;">
					<tr>
						<td>
							<label>Balance Added Successfully !!</label>
						</td>
					</tr>
			</table>

				<?php
					include_once 'con_selectbalance.php';
				?>
			<table>
					<tr>
						<td>
							<label>Balance in Wallet &nbsp; &nbsp; </label>
						</td>

						<td>
							<input type="text" id="available_balance" readonly="true" value="<?php echo $balance;?>">
						</td>
					</tr>	
			</table>

			<table>
				<tr>
					<td>
						<input type="submit" name="btn_makepayment" value = "Go Back" style="
						background-image:linear-gradient(to right, #fc6ab5, #ad77e7);
						color: white;
						font-size: 20px;
						font-weight: bold;
						font-family:Tahoma;
						height: 55px;
						width: 250px;
						border-radius: 10px;
						margin-top: 55px;">
					</td>
				</tr>
			</table>
		</form>
	</div>
</center>
	
</body>
</html>