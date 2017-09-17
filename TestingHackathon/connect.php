<?php
$server_name="localhost";
$server_username="root";
$server_password="";
$server_dbname="merchant";

$conn=mysqli_connect($server_name,$server_username,$server_password, $server_dbname);
if($conn==='false'){
	die("error".mysqli_connect_error());
}
/*else {
   echo "connection Successful";
   
   }
*/	
?>

