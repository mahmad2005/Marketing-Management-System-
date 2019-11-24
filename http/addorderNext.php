<?php
if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"]))
 {
	 $U_Name=$_COOKIE["U_Name"];
	 $U_Pass=$_COOKIE["U_Pass"];
	
	
	include "db_Class.php";
	$obj = new db_class();
	$obj->MySQL();

		if($_POST == TRUE){
			$C_Name = $_POST["C_Name"];
			$C_Email = $_POST["C_Email"];
			$C_Phone = $_POST["C_Phone"];
			$C_Address = $_POST["C_Address"];
			$TimeAndDate = date("Y-m-d H:i:s");
			
			
			 $SQL = "INSERT INTO company_info (C_Name, C_Email, C_Phone, C_Address, UserName, TimeAndDate) VALUES 
			 ('$C_Name','$C_Email','$C_Phone','$C_Address','$U_Name','$TimeAndDate')";
			//echo $SQL;
			$obj->sql($SQL);
?>

<html>
<head>
	<meta charset="utf-8" />
	<title>Table Style</title>
	<meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
	<link rel="stylesheet" href="styleformNext.css" type="text/css">
</head>

<body>
		<center><h1><?php	echo $C_Name; ?></h1></center>
		<center><p>Email: <?php	echo $C_Email ; ?></p></center>
		<center><p>Phone: <?php	echo $C_Phone ; ?></p></center>
		<center><p>Address: <?php	echo $C_Address; ?></p></center>
		
	<div class="table-title">
		<h3>Products List</h3>
	</div>
	<form id="contact" action="addorderSaved.php" method="post">
		<table class="table-fill">
			<thead>
			<tr>
				<th class="text-left">Item</th>
				<th class="text-left">Quantity</th>
			</tr>
			</thead>
				<tbody class="table-hover">
					<tr>
						<td class="text-left"><input type ="hidden" name="P_1" value="Biscuit">Biscuit</td>
						<td class="text-left"><input placeholder="0" type="number" name="Q_1" autofocus></td>
					</tr>
					<tr>
						<td class="text-left"><input type ="hidden" name="P_2" value="Cake">Cake</td>
						<td class="text-left"><input placeholder="0" type="number" name="Q_2" ></td>
					</tr>
					<tr>
						<td class="text-left"><input type ="hidden" name="P_3" value="Chocolate">Chocolate</td>
						<td class="text-left"><input placeholder="0" type="number" name="Q_3" ></td>
					</tr>
					<tr>
						<td class="text-left"><input type ="hidden" name="P_4" value="Ice-Cream">Ice-Cream</td>
						<td class="text-left"><input placeholder="0" type="number" name="Q_4" ></td>
					</tr>
					<tr>
						<td class="text-left"><input type ="hidden" name="P_5" value="Bread">Bread</td>
						<td class="text-left"><input placeholder="0" type="number" name="Q_5" ></td>
					</tr>
			</tbody>
		</table>
		<fieldset>
			<button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Submit</button>
		</fieldset>
	</form>
 </body>
 </html>
<?php			
		
		}
		else
		{
	}
}
else
{
	echo "<p>Please Login</p>";
}
	
?>