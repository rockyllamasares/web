<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<style>
	h1,
	h2 {
		text-align: center;
		color: blue;
	}

	table {
		border: 2px solid black;
		border-collapse: collapse;
		text-align: center;
		width: 100%;
	}

	th,
	td {
		border: 1px solid black;
		padding: 5px;
	}

	p {
		text-align: left;
		color: red;
		font-weight: bold;
	}
</style>

<body>
	<h1>ABC Appliance Center</h1>
	<h2>Kapantawan, Legazpi City</h2>

	<p>Customer Invoice</p>
	<p>Item: Samsung Smart TV</p>
	<table>
		<thead>
			<th>FIRSTNAME</th>
			<th>MIDDLE INITIAL</th>
			<th>LASTNAME</th>
			<th>PRICE</th>
			<th>DOWNPAYMENT</th>
			<th>BALANCE</th>
			<th>INTEREST</th>
			<th>MONTHLY</th>
		</thead>
		<tbody>
			<?php
			/* Sets the form inputs to a
           variables value to be able to
            use in the logic */
			$fName = $_POST["fName"];
			$mName = $_POST["mName"];
			$lName = $_POST["lName"];
			$price = $_POST["price"];
			$downPayment = $_POST["downPayment"];
			$months = $_POST["months"];

			/* Computational Logics */
			$balance = $price - $downPayment;
			$interest = $price * 0.1;
			$monthly = ($balance + $interest) / $months;

			/* Prints the table using the values above*/
			echo "<tr>";
			echo "<td>$fName</td>";
			echo "<td>$mName</td>";
			echo "<td>$lName</td>";
			echo "<td>$price</td>";
			echo "<td>$downPayment</td>";
			echo "<td>$balance</td>";
			echo "<td>$interest</td>";
			echo "<td>$monthly</td>";
			echo "</tr>";

			?>
			<tr>
				<td colspan="8">Prepared by: Maria C. Cute - Clerk</td>
			</tr>
		</tbody>
	</table>

</body>

</html>