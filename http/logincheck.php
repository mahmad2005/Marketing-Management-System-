<?php
function logincheck($uc_name,$uc_pass)
 {
 include "db_Class.php";
 $obj = new db_class();
 $obj->MySQL();

 
$row_u_name = mysqli_fetch_array($obj->sql("SELECT*FROM user_profile WHERE UserName LIKE '$uc_name' "));
$row_check_u_name = $row_u_name['UserName'];
$row_check_u_pass = $row_u_name['UserPass'];

if(($row_check_u_name != null)&&("$row_check_u_pass" == "$uc_pass")&&($row_check_u_name == $uc_name))
	 {
	  return true;
	 }
	 else
	 {
	 return false;
	 }
 $obj->dbclose();
 

 }

?>
