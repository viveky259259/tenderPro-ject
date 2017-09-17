<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<script src="../js/jquery.min.js"></script><!-- jquery for transitions js-->
	<script src="../js/bootstrap.min.js"></script><!-- bootstrap min js-->
	<script src="../js/bootstrap.js"></script><!-- bootstrap js-->
    <script src="../js/alert_tut.js"></script><!-- for slider-->

  <style>
  	

  	 .carousel-inner > .item > img,
  .carousel-inner > .item > a > img {
      width: 70%;
      margin: auto;
  }
  </style>
</head>
<body>
	<header>
		
		<div class="container header">
		<center><img class="img-responsive logoHeader" src="../images/img/NEI.jpg" alt="NEI-image" width="75px" height="90px"></center>
		<div class="container">
			<center><h1>E-Tender</h1>
			<p style="color:#000;font-size:20px;">Ministry of Electronics and Information Technology</p>
			<p style="color:#000;font-size:15px;"><i>A website to handle tender documentation</i></p>
			</center>
		</div>
</div>
	</header>
	<nav class="navbar navbar-inverse">
	<div class="container-fluid">
	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

       <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
			<li><a href="../index.php">Home</a></li>
		    <li><a href="#">Tender</a></li>
		    <li><a href="tender-download.php">Downloads</a></li>
		    <li><a href="#">Tender Notices</a></li>
			<li><a href="#">Help and Support</a></li>
			<li><a href="tender-about-us.php">About Us</a></li>
			<li><a href="tender_search.php">Tender Search</a></li>
			<li><a href="tender-list-input.php" title="Fill tender searching form so as iot can be found if neccessary">Searching form</a></li>
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
</div>
</nav>
	<main>

		<div class="content">
			<form action="error.php" method="POST">
			<center>
				<fieldset class="login-fieldset">
				<table class="table-responsive">
					
					<thead>
						<th class="icon-login"></th>
						<th>
							<legend><h1>Login</h1></legend>

						</th>
						
					</thead>

				<tr>
					<td>
					  <p class="form-login-text">Username:</p></td>
					<td><p class="form-login-text">
						
					<input type="text" name="user_name" placeholder="Enter your username">
						</p>
						
					</td>

                 </tr>

				<tr>
					 <td><p class="form-login-text">Password:</p></td>

					<td><p class="form-login-text"><input type="password" name="password" placeholder="Enter your password"></p>
					</td>
				</tr>
					

					<tr>
						<td></td>
						<td><center><br><input type="checkbox" id="checkbox-login" name="remember"> <label style="cursor:pointer;color:#000;" for="checkbox-login">Remember me</label></center></td>
					</tr>
				<tr>
					<td></td>
					<td><center><input class="btn btn-primary" id="outlined-btn" type="submit" value="Login"></center></td>

				</tr>

				<tr>
					
					<td></td>
					<td><br><center>New user <a class="font-white" href="tender-register.php">Signup Here</a></center></td>
				</tr>
				<br>
				</table>		
			</fieldset>
			</center>
			</form>
		</span>
	</main>
	


	</div>
<footer>
	

<div class="col-md-12 footer">

<div class="nav-footer login-footer">
<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="#">Tender Notice</a></li>
	<li><a href="tender-search.php">Tender Search</a></li>
	<li><a href="tender-download.php">Downloads</a></li>
	<li><a href="tender-login.php">Login</a></li>
	<li><a href="tender-search.php">Tender Search</a></li>
	<li><a href="tender-list-input.php" title="Fill tender searching form so as iot can be found if neccessary">Searching form</a></li>
	<li><a href="tender-about-us.php">About Us</a></li>
	<li><a href="#">Help and Support</a></li>
</ul>


<ul class="footer-right">
	<li><a href="#"><img src="../images/social-link/tw.png" class="twitter" alt="Twitter" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="../images/social-link/fb.png" class="facebook" alt="facebook" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="../images/social-link/google+.png" class="gplus"  alt="gplus" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="../images/social-link/li.png" class="linkedin" alt="linkedin" height="40px" width="40px"></a></li>
</ul>



<div class="copyright">
<center> &copy; Copyright 2017 Allright Reserved Smart India Hackathon17
 <small>Prepared By Team HackClash - 
Theem College of Engineering</small>
</center></div>
</div>
<div class="top-ref">
	<ul class="nav pull-right scroll-top">
  <li><a href="#" title="Scroll to top">Scroll to Top</li>
	</ul>

	</div>
</div>

</footer>