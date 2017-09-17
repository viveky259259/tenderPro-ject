<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/bootstrap.css">

<link rel="stylesheet" href="../css/style.css">
<script src='https://www.google.com/recaptcha/api.js'></script>
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
		

	<form action="recaptcha.php" method="POST">
		<div class="table-striped">
		
		<table class="table table-default">
			<thead>
				
				  <th>
				  </th>
				  <th><h1 style="color:#000;">Just one step required</h1><br></th>
				  <br>
			</thead>
			<br>
			<tr onclick="document.getElementById('Login_next_OTP').focus(); return false;">
		        <td style="color:#000;">OTP:</td>
		        <td><input id="Login_next_OTP" type="text" placeholder="Enter your Login OTP" name="OTP"></td>
      </tr>
	
		<tr>
		<td style="color:#000;">Captcha:</td>
		<td><div class="g-recaptcha" data-sitekey="6LfTaRgUAAAAAGZIfSgmutJADPXSyFXb_t3uh26L"></div>
        
  			  <tr onclick="document.getElementById('Login_next_submit').focus(); return false;">
  				 
					<td></td>
  				 <td>
<button class="btn btn-success" name="submit" type="submit" style="color:#000;">Submit</button>
  				 
</td>


  				
  			</tr>
       
		</table>
		</div>
		</form>
		</div>
		</main>

