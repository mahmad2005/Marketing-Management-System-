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
			
			echo "<p> Name = $C_Name";
			echo "<p> Email = $C_Email ";
			echo "<p> Username = $C_Phone ";
			echo "<p> Username = $C_Address ";
			echo "<p>You have successfully uploaded information.</p>";
			echo "<p><a href=\"./index.php\">Please Login</a></p>";
			
			 $SQL = "INSERT INTO company_info (C_Name, C_Email, C_Phone, C_Address, UserName, TimeAndDate) VALUES 
			 ('$C_Name','$C_Email','$C_Phone','$C_Address','$U_Name','$TimeAndDate')";
			//echo $SQL;
			$obj->sql($SQL);	
		
		}
		else
		{
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Add Order</title>
<link rel="stylesheet" href="styleform.css" type="text/css">
</head>
	<body>
		<div class="container">  
		  <form id="contact" action="addorderNext.php" method="post">
			<h3>Add Company Information</h3>
			<h4>Please tap next for Quotation Information</h4>
			<fieldset>
			  <input placeholder="Company name" type="text" tabindex="1" name="C_Name" required autofocus>
			</fieldset>
			<fieldset>
			  <input placeholder="Company Email Address" type="email" tabindex="2" name="C_Email" required>
			</fieldset>
			<fieldset>
			  <input placeholder="Company Phone Number (optional)" type="tel" tabindex="3" name="C_Phone" required>
			</fieldset>
			<fieldset>
			  <textarea placeholder="Company Address" tabindex="5" name="C_Address" required></textarea>
			</fieldset>
			<fieldset>
			  <button name="submit" type="submit" id="contact-submit" data-submit="...Sending">Next</button>
			</fieldset>
			<p class="copyright">Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a></p>
		  </form>
		</div>
	</body>
</html>
<?php
	}
}
else
{
	echo "<p>Please Login</p>";
}
	
?>