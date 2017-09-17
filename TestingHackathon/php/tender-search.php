<!DOCTYPE html>
<html lang="en">
<head>
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


</head>
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
			<li><a href="tender-list-input.php" title="Fill tender searching form so as iot can be found if neccessary">Searching form</a></li>
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
	</nav>
	</div>

</nav>

	<main style="margin-top: 90px;"><center>
	<form action="tender-search.php" method="POST">
	<table class="table-default">
		  <tr>
		  	
			<td><input type="radio" id="byId" name="radio" value="byId"><label style="cursor: pointer;" for="byId" class="font-white">Tender Id</label> <br></td>


		  </tr> 
<tr>

	<td><input type="radio" id="name" name="radio" value="byName"><label  style="cursor: pointer;" for="name" class="font-white">Tender Name</label> <br></td>
</tr>
			
		   <tr>
		   	
		   	<td> <input type="radio" id="category" name="radio" value="byCategory"><label style="cursor: pointer;"  for="category" class="font-white">Tender Category</label><br></td>
		   </tr>
		  
		   <tr><td><input type="radio" id="value" name="radio" value="byValue"><label style="cursor: pointer;"  for="value" class="font-white">Tender Value</label> <br></td></tr>
		  

		  <tr>  <td><input type="radio" id="location" name="radio" value="byLocation"><label  style="cursor: pointer;" for="location" class="font-white">Tender Location </label><br></td></tr> 

			<tr>
				<td>
					<input type="radio" id="sdate" name="radio" value="byStartDate"><label style="cursor: pointer;"  for="sdate" class="font-white">Tender Start Date </label><br>
				</td>

			</tr>
		   <tr>
		   	
		   	<td><input type="radio" id="edate" name="radio" value="byEndDate"><label  style="cursor: pointer;" for="edate" class="font-white">Tender End Date</label> <br>
		   <br></td>
		   </tr>
		   <tr>
		   	
		   	<td>
		   		<input type="submit" id="outlined-btn" value="submit">
		   	</td>
		   </tr>
		


		</table>
</form></center>
		   <?php

		   $radio = $_POST['radio'];
		   	if(isset($radio)&&!empty($radio)){
		   		if($radio=="byId"){
?><br>
<center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Search Id</p>
<input type="number" name="search_by_id">
<input id="outlined-btn" type="submit" value="search">
</form></center>

<?php
} if($radio=="byName"){
?><br><center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender Name</p>
<input type="text" name="search_by_name">
<input id="outlined-btn" type="submit" value="search">
		 </form> </center> 			
<?php
	} if($radio=="byCategory"){
?><br>
<center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender Category</p>
		<select name="search_by_category" id="tender_category">
			<option class="font-white" value="construction">Construction</option>
			<option class="font-white" value="business">Business</option>
			<option class="font-white" value="construction">Construction</option>
			<option class="font-white" value="airlines">Airlines</option>
			<option class="font-white" value="machineries">Machineries</option>
			<option class="font-white" value="maintenance">Maintenance</option>
			<option class="font-white" value="services">Services</option>
			<option class="font-white" value="computer and IT">Computer and IT</option>
			<option class="font-white" value="Science and technology">Science and Technology</option>
			<option class="font-white" value="medical Tender">Medical Tender</option>
			<option class="font-white" value="oil and Gas">Oil and Gas</option>
			<option class="font-white" value="environment">Environment</option>
			<option class="font-white" value="pollution">Pollution</option>
			<option class="font-white" value="railway">Railway</option>
			<option class="font-white" value="other:">Other:</option>
		</select>
<input id="outlined-btn" type="submit" value="search">
</form></center>
<?php
   }
		 if($radio=="byValue"){
		 	?><br><center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender Value</p>
<input type="text" name="search_by_value">
<input id="outlined-btn" type="submit" value="search">

</form></center>

		 	<?php

		   		} if($radio=="byLocation"){

?><br><center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender Location</p>
<select name="search_by_location" id="tender_location">
			<option class="font-white" value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
			<option class="font-white" value="Andhra Pradesh">Andhra Pradesh</option>
			<option class="font-white" value="Arunachal Pradesh">Arunachal Pradesh</option>
			<option class="font-white" value="Assam">Assam</option>
			<option class="font-white" value="Bihar">Bihar</option>
			<option class="font-white" value="Chandigarh">Chandigarh</option>
			<option class="font-white" value="Chhattisgarh">Chhattisgarh</option>
			<option class="font-white" value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
			<option class="font-white" value="Daman and Diu">Daman and Diu</option>
			<option class="font-white" value="National Capital Territory of Delhi">National Capital Territory of Delhi</option>
			<option class="font-white" value="Goa">Goa</option>
			<option class="font-white" value="Gujarat">Gujarat</option>
			<option class="font-white" value="Haryana">Haryana</option>
			<option class="font-white" value="Himachal Pradesh">Himachal Pradesh</option>
			<option class="font-white" value="Karnataka">Karnataka</option>
			<option class="font-white" value="Kerala">Kerala</option>
			<option class="font-white" value="Madhya Pradesh">Madhya Pradesh</option>
			<option class="font-white" value="Maharashtra">Maharashtra</option>
		</select>
<input id="outlined-btn" type="submit" value="search"> 
		</form></center>
<?php

	} if($radio=="byStartDate"){

		   			?><br><center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender Start Date</p>
<input type="date" name="search_by_start_date">
<input id="outlined-btn" type="submit" value="search">
</form></center>
<?php

	} if($radio=="byEndDate"){

?>
<br><center>
<form action="search.php" method="POST">
<p class="font-white">Enter your Tender End Date</p>
<input type="date" name="search_by_end_date">
<input id="outlined-btn" type="submit" value="search">
</form>
</center>
<?php
}
?>
	<?php 
}
	?>

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
</body>
</html>
<form>


