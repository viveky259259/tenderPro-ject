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

  .down-pad{
  	position: relative;
  	bottom: 70px;
  }
  .navbar-default{
  	color:#131313;
  }
  </style>

  <script>
  	$('.scroll-top').click(function(){
  $('body,html').animate({scrollTop:0},1000);
})
  </script>
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
		    <li><a href="tender-login.php">Login</a></li>
			<li><a href="#">Help and Support</a></li>
			<li><a href="tender-about-us.php">About Us</a></li>
			<li><a href="tender_search.php">Tender Search</a></li>
			<li><a href="tender-list-input.php" title="Fill tender searching form so as iot can be found if neccessary">Searching form</a></li>
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
	</nav>
	</div>



	<main>
		
		<form action="" method="POST">
		<center>
			<table class="table table-striped">
				
				<thead>
					<th></th>
					<th><h1>Supplier Registration</h1></th>

				</thead>

				<tr>
					<td><label class="font-white" for="fname">First Name:</label></td>
					<td><input id="fname" type="text" name="first_name" placeholder="Enter your first name"></td>
			</tr>
				<tr><td>
				<label class="font-white" for="lname">Lastname:</label></td>
				<td><input id="lname" type="text" name="last_name" placeholder="Enter your last name"></td>
			</tr>

			<tr>
					<td><label class="font-white" for="gender">Gender:</label>
					</td>

					<td><input type="radio" name="gender"><span class="font-white">Male <input type="radio" name="gender">Female</span></td>
 
				</tr>
			<tr>
					<td><label class="font-white" for="pan">PAN No:</label></td>
					<td><input id="pan" type="text" name="pan" placeholder="Enter Your Pan Number"></td>

			</tr>
			<tr>
					<td><label class="font-white" for="add">Address:</label></td>

					<td><textarea id="add" name="address" cols="40" rows="5" placeholder="Enter your Address"></textarea></td>
				</tr>


				
				<tr>
					<td><label class="font-white" for="phNumber">Phone Number:</label></td>
					<td><input type="phNumber" name="phNumber" placeholder="Phone number"></td>




				</tr>




<tr><td>

<div class="clearfix " id="businessTypes">
                    <div class="input-group">
                        
                        <input data-val="true" data-val-required="The BusinessTypeRequired field is required." id="BusinessTypeRequired" name="CompanyInformation.BusinessTypeRequired" type="hidden" value="True" />
                        <input class="hidden-unit-business-type" data-val="true" data-val-requiredif="The Type of organisation field is required" data-val-requiredif-dependentproperty="BusinessTypeRequired" data-val-requiredif-targetvalue="true" id="CompanyInformation_UnitBusinessType" name="CompanyInformation.UnitBusinessType" type="hidden" value="" />
                        <input class="hidden-unit-business-subtype" id="CompanyInformation_UnitBusinessSubtype" name="CompanyInformation.UnitBusinessSubtype" type="hidden" value="" />
                        <div class="help-label"><label for="CompanyInformation_UnitBusinessType">Type of organisation:</label><button class="smaller-text btn btn-mini btn-link help-btn" data-container="body" data-content="There are several options available. Only trade Suppliers such as Private Company, Public Limited Company, Sole Trader, Partnership or Charity can respond to tenders. These type of organisations must have a unique VAT number or PPSN or Charity Number. If you are not a trade Supplier but want to receive alerts on tenders you should select the most suitable from the two remaining options available; Representative Body or Public Interest/Non-Supplier, both of which do not require an entry for VAT Number." data-placement="right" data-toggle="popover" data-trigger="focus" tabindex="-1" title="Type of organisation" type="button"><i class="icon-question-sign icon-large"></i></button></div></td>
                        <td><select name="" id="unit-businesstype-container-select" class="unit-business-container-select">


                            <option value=" _ " id="none-unit-businesstype-option">-- Select Type of Organisation --</option>
                                <option id="1_6"  value="1_6">Private Company</option>
                                <option id="1_7"  value="1_7">Public Limited Company</option>
                                <option id="1_8"  value="1_8">Sole Trader</option>
                                <option id="1_11"  value="1_11">Partnership</option>
                                <option id="1_9"  value="1_9">Charity Organisation</option>
                                <option id="2_5"  value="2_5">Representative Body</option>
                                <option id="2_10"  value="2_10">Public Interest/Non-Supplier</option>
                        </select></td>
                        <span class="field-validation-valid" data-valmsg-for="CompanyInformation.UnitBusinessType" data-valmsg-replace="true"></span>
                    </div>

</tr>


					<tr>
						<td><label class="font-white" for="role">Your Role in Company:</label></td>
						<td><input type="text" id="role" name="phNumber" placeholder="Your role in company"></td>
					</tr>
<tr>
						<td><label class="font-white" for="uname">Username:</label></td>
						<td><input type="text" id="uname" name="username" placeholder="Enter your username"></td>
					</tr>

					<tr>
						<td><label class="font-white" for="pass">Password:</label></td>
						<td><input type="password" id="pass" name="pass" placeholder="Enter your password"></td>
					</tr>
					<tr>
						<td><label class="font-white" for="re-pass">Re-Type Password:</label></td>
						<td><input type="password" id="re-pass" name="re_pass" placeholder="Re-Enter your password"></td>
					</tr>
				<tr>
						<td><label class="font-white" for="role">Email:</label></td>
						<td><input type="email" name="email" placeholder="Enter your Email"></td>
					</tr>

				
					<tr>
						<td></td>
						<td><input id="outlined-btn" type="submit" name="submit" value="Submit"></td>
					</tr>
			</table>
			</fieldset></center>

		</form>
	</main>
		
		<footer>

<div class="col-md-12 footer">

<div class="nav-footer down-pad">
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