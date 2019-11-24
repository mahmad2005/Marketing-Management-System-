<?php
if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"]))
 {
	 $U_Name=$_COOKIE["U_Name"];
	 $U_Pass=$_COOKIE["U_Pass"];
	
	include "db_Class.php";
	$obj = new db_class();
	$obj->MySQL();
	
	if($_GET == TRUE){
		$C_Serial = $_GET["Company_Serial"];
		
		
		$Company_info = mysqli_fetch_array($obj->sql("SELECT*FROM company_info WHERE SN LIKE '$C_Serial'"));

		echo "<h1>".$Company_info['C_Name']."</h1>";
		echo "<p>".$Company_info['C_Email']."</p>";
		echo "<p>".$Company_info['C_Phone']."</p>";
		echo "<p>".$Company_info['C_Address']."</p>";
		echo "<p> Visit Date: ".$Company_info['TimeAndDate']."</p>";

		$Query = $obj->sql("SELECT*FROM Products WHERE Serial_ID LIKE '$C_Serial'");
		
		echo "<table border='1'>
		<tr>
		<th>products</th>
		<th>Quantity</th>
		</tr>";
		
		while($row = mysqli_fetch_array($Query))
		{
		echo "<tr>";
		echo "<td>" . $row['Product_Name'] . "</td>";
		echo "<td>" . $row['Product_Quantity'] . "</td>";
		echo "</tr>";
		}
		echo "</table>";
		
		
	
}
}
?>