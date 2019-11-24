<?php
if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"]))
 {
	 $U_Name=$_COOKIE["U_Name"];
	 $U_Pass=$_COOKIE["U_Pass"];
	
	
	include "db_Class.php";
	$obj = new db_class();
	$obj->MySQL();
	
		$Query = $obj->sql("SELECT*FROM company_info ORDER BY SN DESC"); 
		//$Company_info = mysqli_fetch_array($obj->sql($Query));

		echo "<table border='1'>
		<tr>
		<th>Serial No</th>
		<th>Company Name</th>
		<th>Address</th>
		<th>Visit Date</th>
		</tr>";

		while($Company_info = mysqli_fetch_array($Query))
		{
		echo "<tr>";
		echo "<td>" . $Company_info['SN'] . "</td>";
		echo "<td><a href=\"./selectedcompany.php?Company_Serial=".$Company_info['SN']."\">" . $Company_info['C_Name'] . "</a></td>";
		echo "<td>" . $Company_info['C_Address'] . "</td>";
		echo "<td>" . $Company_info['TimeAndDate'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
	
}
?>