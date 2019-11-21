<!DOCTYPE html>
<?php
include "db_Class.php";
$obj = new db_class();
$obj->MySQL();

	if($_POST == TRUE){
		$F_Name = $_POST["F_Name"];
		$E_Mail = $_POST["E_Mail"];
		$U_Name = $_POST["U_Name"];
		$U_Pass = $_POST["U_Pass"];
		$TimeAndDate = date("Y-m-d H:i:s");
		
		echo "<p> Name = $F_Name";
		echo "<p> Email = $E_Mail";
		echo "<p> Username = $U_Name";
		echo "<p>You have successfully registered.</p>";
		echo "<p><a href=\"./index.php\">Please Login</a></p>";
		
		 $SQL = "INSERT INTO user_profile (FullName, E_mail, UserName, UserPass, CreateDate) VALUES 
		 ('$F_Name','$E_Mail','$U_Name','$U_Pass','$TimeAndDate')";
		//echo $SQL;
		$obj->sql($SQL);	
	
	}
	else
	{
?>
<html>
<body>
	<form method="post" action="register.php">
	  Full Name: <input type="text" name="F_Name"><br>
	  Email: <input type="email" name="E_Mail"><br>
	  Username: <input type="text" name="U_Name"><br>
	  Password: <input type="password" name="U_Pass"><br>
	  <button type="submit" value="Submit">Submit</button>
	  <button type="reset" value="Reset">Reset</button>
	</form>
</body>
</html>
<?php
	}
?>