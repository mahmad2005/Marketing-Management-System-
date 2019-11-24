<?php
if(isset($_COOKIE["U_Name"], $_COOKIE["U_Pass"]))
 {
	 $U_Name=$_COOKIE["U_Name"];
	 $U_Pass=$_COOKIE["U_Pass"];
	
	
	include "db_Class.php";
	$obj = new db_class();
	$obj->MySQL();

		if($_POST == TRUE){
		echo 	$P[] = $_POST["P_1"];
		echo	$P[] = $_POST["P_2"];
		echo	$P[]= $_POST["P_3"];
		echo	$P[] = $_POST["P_4"];
		echo	$P[] = $_POST["P_5"];
		echo	$Q[] = $_POST["Q_1"];
		echo	$Q[] = $_POST["Q_2"];
		echo	$Q[] = $_POST["Q_3"];
		echo	$Q[]  = $_POST["Q_4"];
		echo	$Q[]  = $_POST["Q_5"];
			$TimeAndDate = date("Y-m-d H:i:s");
			
		 $Company_Serial_ID = mysqli_fetch_array($obj->sql("SELECT*FROM company_info ORDER BY SN DESC LIMIT 1"));
		 $C_Serial = $Company_Serial_ID['SN'];
			
			for ($x = 0; $x <= 4; $x++) {
			$product = $P[$x];
			$Quantity = $Q[$x];
				echo "The order number is: $C_Serial <br>";
				$SQL = "INSERT INTO Products (Product_Name, Product_Quantity, 	Serial_ID ) VALUES 
				('$product ','$Quantity','$C_Serial')";
				$obj->sql($SQL);
				}
			//echo $SQL;

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