<?php
	SESSION_START();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Amount to Pay</title>
	<link rel="stylesheet" href="css\styles.css">
	<style>
		.card{
			border: 1px solid;
			padding: 10px;
			box-shadow: 0px 0px 10px 10px;
			width: 500px;
			height: 600px;
			border-radius: 10px;	
		}
	</style>
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
			<table>
				<tr>
					<td></td>
					<td><label style="margin-left: 80px;">Select Card Type</label></td>
				</tr>

				<tr>
				</tr>

				<tr>
				</tr>

				<tr>
				</tr>

				<form method="POST" action="con_addbalance.php">
				<tr>
					<td></td>
					<td style="background-color: black; height: 60px; color:white; border-radius: 15px;">&nbsp;&nbsp;<input type = "radio" name="cardselect" value="CreditCard" checked="true">&nbsp;&nbsp;Credit Card &nbsp;&nbsp;<a style="color:blue;" href="creditcard_details.html">Click here for its Details</a>&nbsp;&nbsp;</td>
				</tr>


				<tr>
					<td></td>
					<td style="background-color: black; height: 60px; color:white; border-radius: 15px; margin-top: 30px;">&nbsp;&nbsp;<input type = "radio" name="cardselect" value="DebitCard">&nbsp;&nbsp;Debit Card &nbsp;&nbsp;<a style="color:blue;" href="debitcard_details.html">Click here for its Details</a>&nbsp;&nbsp;</td>
				</tr>
			</table>

			<table  style="padding-top: 40px;">
				<tr>
						<td></td>
						<td><label>Wallet Balance: &nbsp; &nbsp; </label></td>
						<td><input type="text" id="walletbalance" value= "<?php echo "$balance"?>" readonly=true required></td>
				</tr>


				<tr>
						<td></td>
						<td><label>Amount to Add: &nbsp; &nbsp; </label></td>
						<td><input type="text" name="Amounttopay" placeholder="Amount" required></td>
				</tr>

				<tr>
					<td></td>
					<td>
						<label>Card Number: &nbsp; &nbsp; </label></td>
						<td><input type="text" name="crdnumber" placeholder="Card Number" required>
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<label>Name on Card: &nbsp; &nbsp; </label></td>
						<td><input type="text" name="nameoncard" placeholder="Name on Card" required>
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<label>CVV: &nbsp; &nbsp; </label></td>
						<td><input type="text" name="cvv" placeholder="CVV" required>
					</td>
				</tr>

				<tr>
					<td></td>
					<td>
						<label>Expiry Date: &nbsp; &nbsp; </label></td>
						<td><input type="text" name="expiry" placeholder="Expiry Date" required>
					</td>
				</tr>
			</table>

			<table>

				<tr>
					<td>
						<input type="submit" name="btn_makepayment" value = "Add Balance" style="
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
		</div>
			
		</form>
	</div>
   </center>
</body>
</html>