<!DOCTYPE html>
<html>

<head>
	<title>documents</title>
	</title>
	<style type="text/css">
		/* body {
			background-color: #b3fff0;
		} */

		table,
		tr,td {
			border: 2px solid black;
		}

		h1 {
			font-family: serif;
		}
		span{
			color: red;
		}
		center.prepared{
			font-size: small;
		}
		h1,h3{
			color: blue;
		}
	</style>
</head>

<body>
	<center>
		<h1>ABC Appliance Center</h1>
		<h3>Kapantawan,Legazpi City</h3>
	</center>
	<span>Item: Samsung Smart TV</span>
	<table border="2" width="100%" cellpadding="8" style="font-family:Impact; font-size:18px; 
		border-collapse:collapse" align="center">
		<tr>
			<td>
				FIRSTNAME
			</td>
			<td>
				MIDDLE INITIAL
			</td>
			<td>
				LASTNAME
			</td>
			<td>
				PRICE
			</td>
			<td>
				DOWN PAYMENT
			</td>
			<td>
				BALANCE
			</td>
			<td>
				INTEREST
			</td>
			<td>
				MONTHLY DUE
			</td>
		</tr>

		<tr>
			<td>
				<?php
				$firstName = $_POST["firstName"];
				echo $firstName;
				?>
			</td>



			<td>
				<?php
				$middleName = $_POST["middleName"];
				echo $middleName;
				?>
			</td>



			<td>
				<?php
				$lastName = $_POST["lastName"];
				echo $lastName;
				?>
			</td>



			<td>
				<?php
				$itemPrice = $_POST["itemPrice"];
				echo $itemPrice;
				?>
			</td>



			<td>
				<?php
				$downPayment = $_POST["downPayment"];
				echo $downPayment;
				?>
			</td>



			<td>
				<?php
				$balance = $itemPrice - $downPayment;
				echo $balance;
				?>
			</td>

			<td>
				<?php
				$interest = $itemPrice / 10;
				echo $interest;
				?>
			</td>

			<td>
				<?php
				$monthly_due = $balance + $interest / $downPayment;
				echo $monthly_due;
				?>
			</td>
		</tr>
		<tr class="prepared">
			<td colspan="8">
				<center class="prepared">
					Prepared by: Maria C. Cute-Clerk
				</center>
			</td>
		</tr>

	</table>

</body>

</html>