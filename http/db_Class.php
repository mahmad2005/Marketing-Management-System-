<?php


class db_class
{
	//MyQql Property
	var $conn;
	var $result;
################################   DO NOT CHANGE   #################################
									//MySql Method
									
	//Connect the Server
	function MySQL($host="localhost", $user="DB_USERNAME", $pass="DB_PASSWORD",$bd="DB_NAME")
	
	
	{
		//echo "$host, $user , $pass, $bd";
		$this->conn = mysqli_connect($host,$user, $pass, $bd) or die(mysqli_error()) 
				or die('Could not connect: ' . mysqli_error());
				
		$this->select_db($bd);
	}
	
	//Connect to badabase
	function select_db($bd)
	{
				$db=mysqli_select_db($this->conn,$bd) or die(mysqli_error())
						or die('Could not connect to '. $bd .' ' . mysqli_error());
	}
	
	//Generate Querey
	function sql($SQL)
	{

		$this->result = mysqli_query($this->conn,$SQL)
					or die('<br>SQL Error<br>' .$SQL.' '. mysqli_error($conn)); 
		return $this->result;
		
	}
	
	function dbclose() {
		mysqli_close($this->conn)
		or die('SQL Error: closeError<br>'. mysqli_error());
	}

}
?>