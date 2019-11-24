<?php
if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"]))
 {
	 $U_Name=$_COOKIE["U_Name"];
	 $U_Pass=$_COOKIE["U_Pass"];
	
	
	include "db_Class.php";
	$obj = new db_class();
	$obj->MySQL();

		if($_POST == TRUE){
			$P[] = $_POST["P_1"];
			$P[] = $_POST["P_2"];
			$P[]= $_POST["P_3"];
			$P[] = $_POST["P_4"];
			$P[] = $_POST["P_5"];
			$Q[] = $_POST["Q_1"];
			$Q[] = $_POST["Q_2"];
			$Q[] = $_POST["Q_3"];
			$Q[]  = $_POST["Q_4"];
			$Q[]  = $_POST["Q_5"];
		
	    echo $TimeAndDate = date("Y-m-d H:i:s");
		echo "<br>";
			
		 $Company_info = mysqli_fetch_array($obj->sql("SELECT*FROM company_info ORDER BY SN DESC LIMIT 1"));
		 $C_Serial = $Company_info['SN'];
		 echo "<h1>" . $Company_info['C_Name'] . "</h1><br>";
		 echo $Company_info['C_Phone'] . "<br>";
		 echo $Company_info['C_Address'] . "<br>";
		 echo "The order number is: $C_Serial <br>";
		 
		for($i=0; $i <=5; $i++){
				echo $P[$i];
				echo " - ";
				echo $Q[$i];
				echo "<br>";
			}
			
			for ($x = 0; $x <= 4; $x++) {
			$product = $P[$x];
			$Quantity = $Q[$x];
				$SQL = "INSERT INTO Products (Product_Name, Product_Quantity, 	Serial_ID ) VALUES 
				('$product ','$Quantity','$C_Serial')";
				$obj->sql($SQL);
				}
			//echo $SQL;
			
			echo "<p><a href=\"./welcome.php\">Dashboard</a></p></center>";

?>

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