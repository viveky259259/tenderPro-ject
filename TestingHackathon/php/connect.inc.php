<?php

$servername = "localhost";
$server_username = "root";
$server_password = "root";
$server_dbname = "admin";


$conn = mysqli_connect($servername, $server_username, $server_password, $server_dbname);


if($conn === 'false'){
	die("ERROR: Could not connect to the database ".mysqli_connect_error());
}

?>
