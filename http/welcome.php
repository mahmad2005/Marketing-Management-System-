<?php
 if($_POST == TRUE)
	{
		$u_name = $_POST["U_Name"];
		$u_pass = $_POST["U_Pass"];
		
		include "logincheck.php";
		$up_check=logincheck("$u_name","$u_pass");
		if($up_check == "correct") 
		{
			setcookie("U_Name", $u_name, 2147483647);
			setcookie("U_Pass", $u_pass, 2147483647);
			
include "welcomebodyheader.php"; //this has to be done bcoz cookies do not work if any html codes are placed before it.
			echo "<center>You have logged in Successfully.";
			//echo "<p><a href=\"./dashboard.php\">Control Panel</a></p>";
			echo "<p><a href=\"./web/cpanel.php\" class=\"myButton\">iCon Switch Control Panel</a></p></center>";
		}
		else
		{
			echo "login incorrect";
		}	
	}
	else if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"])){
	include "welcomebodyheader.php";
		echo "<center><p>Welcome again</p>";
		echo "<p><a href=\"./web/cpanel.php\" class=\"myButton\">iCon Switch Control Panel</a></p>";
		echo "<p><a href=\"./logout.php\">Logout</a></p></center>";
	}
echo '</body>';
echo '</html>';
?>