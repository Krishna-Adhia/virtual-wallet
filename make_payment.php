<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
	<style>
		.card
		{
			border: 1px solid;
			padding: 10px;
			box-shadow: 0px 0px 10px 10px;
			width: 500px;
			height: 250px;
			border-radius: 10px;	
		}
	</style>
<head>
	<title>Amount to Pay</title>
	<link rel="stylesheet" href="css\styles.css">
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
		</center>

			<?php
				include_once 'con_selectbalance.php';
			?>
		<center>
			<div class = "card">
				<form method="POST" action="con_makepayment.php">
				<table>
					<tr>
						<td>
							<label>Wallet Balance: &nbsp; &nbsp; </label>
						</td>

						<td>
							<input type="text" id="walletbalance" value= "<?php echo "$balance"?>" readonly=true required>
						</td>

					</tr>

					<tr>
						<td>
							<label>Amount to Pay: &nbsp; &nbsp; </label>
						</td>

						<td>
							<input type="text" name="Amounttopay" placeholder="Amount" required>
						</td>
					</tr>
				</table>

				<table>
					<tr>
						<td>
							<input type="submit" name="btn_makepayment" value = "Proceed for payment" style="
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
				</form>
				</table>		
			</div>
		</center>
	</div>
</body>
</html>