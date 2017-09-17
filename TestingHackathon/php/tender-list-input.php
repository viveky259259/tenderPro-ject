<!DOCTYPE html>
<html>
<meta charset="UTF-8">
	<title>Tender Search</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">

	<script src="../js/jquery.min.js"></script><!-- jquery for transitions js-->
	<script src="../js/bootstrap.min.js"></script><!-- bootstrap min js-->
	<script src="../js/bootstrap.js"></script><!-- bootstrap js-->
    <script src="../js/alert_tut.js"></script><!-- for slider-->


<body>
<header>	
<div class="container header">
		<center><img class="img-responsive logoHeader" src="../images/img/NEI.jpg" alt="NEI-image" width="75px" height="90px"></center>
		<div class="container">
			<center><h1>E-TENDER SYSTEM</h1>
			<p style="color:#000;font-size:20px;">Ministry of Electronics and Information Technology</p>
			<p style="color:#000;font-size:15px;"><i>A website to handle tender documentation</i></p>
			</center>
		</div>
</div>
</header>
</header>

<nav>
	


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

		    <li><a href="#">Tender view</a></li>
		    <li><a href="#">Tender Notices</a></li>
		    <li><a href="tender-download.php">Downloads</a></li>
		    <li><a href="php/tender-login.php">Login</a></li>
			<li><a href="#">Help and Support</a></li>
			<li><a href="tender-about-us.php">About Us</a></li>
			<li><a href="tender-search.php">Tender Search</a></li>
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
	</nav>
	</div>

</nav>

<main class="container" style="padding:40px;margin-bottom: 40px;">
<h1>Input Tender Details so as it can be found if necessary<br><br></h1>


<table class="table table-striped">
	<form action="list_input_tender.php" method="POST">
		
		<tr>
			<td><p style="color:#000;font-size: 15px;">Tender id:</p>
		</td>

		<td><input type="text" name="tender_id">
		<br><br></td>
		</tr>

		<tr>
			<td><p style="color:#000;font-size: 15px;">Tender Name:</td>
			<td><input type="text" name="tender_name"></p><br><br></td>
		</tr>
		
		<tr><td><p style="color:#000;font-size: 15px;">Tender Category:</p></td>
		<td><select name="tender_category" id="tender_category">
			<option value="construction">Construction</option>
			<option value="business">Business</option>
			<option value="construction">Construction</option>
			<option value="airlines">Airlines</option>
			<option value="machineries">Machineries</option>
			<option value="maintenance">Maintenance</option>
			<option value="services">Services</option>
			<option value="computer and IT">Computer and IT</option>
			<option value="Science and technology">Science and Technology</option>
			<option value="medical Tender">Medical Tender</option>
			<option value="oil and Gas">Oil and Gas</option>
			<option value="environment">Environment</option>
			<option value="pollution">Pollution</option>
			<option value="railway">Railway</option>
			<option value="other:">Other:</option>
		</select><br><br>
</td></tr>
		
		<tr>
			<td>
			<p style="color:#000;font-size: 15px;">Location:</p>
			</td>

			<td>
				<select name="tender_location" id="tender_location">
			<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			<option value="Andhra Pradesh">Andhra Pradesh</option>
			<option value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option value="Assam">Assam</option>
			<option value="Bihar">Bihar</option>
			<option value="Chandigarh">Chandigarh</option>
			<option value="Chhattisgarh">Chhattisgarh</option>
			<option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
			<option value="Daman and Diu">Daman and Diu</option>
			<option value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
			<option value="Goa">Goa</option>
			<option value="Gujarat">Gujarat</option>
			<option value="Haryana">Haryana</option>
			<option value="Himachal Pradesh">Himachal Pradesh</option>
			<option value="Karnataka">Karnataka</option>
			<option value="Kerala">Kerala</option>
			<option value="Madhya Pradesh">Madhya Pradesh</option>
			<option value="Maharashtra">Maharashtra</option>
		</select><br><br>
			</td>
		</tr>
		
		<tr>
			
			<td><p style="color:#000;font-size: 15px;">Tender Value (In Rupees):</p></td>
			<td><input type="number" name="tender_value"><br><br></p>
			</td>
		</tr>
		
			<tr>
				<td>
				<p style="color:#000;font-size: 15px;">Tender Start date:</p>
				</td>

				<td><input type="date" name="tender_start_date"><br><br></td>
			</tr>
			
		<tr>
			
			<td><p style="color:#000;font-size: 15px;">Tender End date:</p></td>
			<td><input type="date" name="tender_end_date"><br><br></td>
		</tr>
			
			
			<tr>
				<td></td>
				<td>
<input type="submit" id="outlined-btn" value="Append" name="submit">
</td>
			</tr>

	</form>
</table>
</main>


<footer>
	


<div class="col-md-12 footer">

<div class="nav-footer">
<ul>
<li><a href="../index.php">Home</a></li>
	<li><a href="#">Tender Notice</a></li>
	<li><a href="tender-search.php">Tender Search</a></li>
	<li><a href="tender-download.php">Downloads</a></li>
	<li><a href="tender-login.php">Login</a></li>
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
  <li><a href="#" style="color:#fff;" title="Scroll to top">Scroll to Top</li>
	</ul>

	</div>
</div>

</footer>
</body>
</html>