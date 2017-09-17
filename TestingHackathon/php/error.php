<?php
include 'connect.inc.php';

session_start();

$uname =$_POST['user_name'];
$pass = $_POST['password'];
$pass_hash = md5($pass);


if(isset($uname)&&!empty($uname)){
	if(isset($pass)&&!empty($pass)){
		
		$sql = "SELECT user_name,password FROM login";
		$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   
   while($row = mysqli_fetch_assoc($result)) {
       if($row["user_name"] == $uname && $row["password"] == $pass_hash){
       	header('Location:login_next.php');
       }else{
       	echo"Username and password is wrong";
       }
    }
    //sanitary regex
	
	
} else {
    echo "0 results";
}


mysqli_close($conn);


	}else{
		echo"Password cannot be empty";
	}
}else{
		echo"Username cannot be empty";
	}







?>