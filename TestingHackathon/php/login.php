
<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.css">
<link rel="stylesheet" href="../css/style.css">
<style>
	.btn-success{
		background:none;
		border:1px solid #06FF00;
		color:#000;
		width:220px;
		height:40px;
	}
</style>

</head>
<body>


<main>

<br>
<br>
	<div class="container boxmodel">
		

	<form action="loginPhp.php " method="POST">
		<div class="table-responsive">
		
		<table class="table table-hover">
			<thead>
	
	  <th></th>
	  <th><h1>Login to continue</h1></th>
	  <br>
</thead>
		<tr onclick="document.getElementById('login_username').focus(); return false;">
        <td>Username:</td>
        <td><input id="login_username" type="text" placeholder="Enter your username" name="user_name"></td>
      </tr></label>
	
		<tr onclick="document.getElementById('login_password').focus(); return false;">
			<td>Password:</td>
			<td><input id="login_password" type="password" placeholder="Enter your Password" name="password"></td>

		</tr>
        
  			  <tr onclick="document.getElementById('login_submit').focus(); return false;">
  				 
					<td width="20%"></td>
  				 <td>

     <button class="btn btn-success" name="submit" type="submit">Submit</button></a>
  				 </td>



  				
  			</tr>
       <tr>
       	<td></td>
       	<td><a href="../php/register.php">Dont have an account <br>Register here</a></td>
       </tr>
		

</table>


	</form>

	</main>

</body>
</html>
