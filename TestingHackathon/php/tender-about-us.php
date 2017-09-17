
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
		    <li><a href="tender-login.php">Login</a></li>
			<li><a href="#">Help and Support</a></li>
			<li><a href="tender-search.php">Tender Search</a></li>
			
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
	</nav>
	</div>

	</nav>
<main>
	<div class="container about-us">
		<h1>
			About Us
		</h1>

		<p>The project entitled “Automation in preparation of Tender documents” emphasis on various tender related tasks thus minimizing the paper pen load to the digital handling which is much easy and time saving. Replacing the human handwriting or the typewriter’s typing with the electronic form which will lead to less misinterpretations. We transform the tedious job of manual data filing every now and then to just clicking steps away.
		This tool eases the usage and working of govt.  for the generation of tender notices and enhances merchant involvement, adaptability and participation via our pre-defined formats suitable for every particular notice.  
	</p>


<h1>Hackclash</h1>
<p> It is a team of 8 members (6 students and 2 mentors grouped) has taken this project as a problem statement for the ministry of Electronics & Information technology (MEITY ) participating in the smart India Hackathon’17….
		Moving forward towards making India Digital.
		Our group was formed in January 2017 at Theem College of Engineering’s Computer and IT department comprising the students as participants and teachers as Mentors.


</p>

<h1>Contact Us</h1>

<p>When in worry and want to sort out any query, </p>
<p>Or wish to publish notice in hurry.</p>
<p>Find some answers in the FAQ sections</p>
<p>Else we are just a call / email away.</p>
<form action="contact.php" method="POST">
	<table class="table table-striped">
		<tr>
			<td>Email:</td>
			<td><input type="email" name="contact-email" placeholder="Your Email Id"></td>
		</tr>
		<tr>
			
			<td>Subject</td>
			<td><input type="text" name="contact-subject" placeholder="Your Contact Subject"></td>
		</tr>


		<tr>
			<td>Message:</td>

			<td><textarea name="contact-message" id="" cols="30" rows="10" placeholder="Your Message or feedback"></textarea>
			</td>
		</tr>


		<tr>
			<td></td>

<td><input id="outlined-btn" type="submit" value="Mail"></td>		
</tr>
	</table>




</form>
	</div>

</main>

<footer>
	<div class="col-md-12 footer">

<div class="nav-footer">
<ul>
<li><a href="../index.php">Home</a></li>
	<li><a href="#">Tender Notice</a></li>
	<li><a href="tender-search.php">Tender Search</a></li>
	<li><a href="tender-list-input.php" title="Fill tender searching form so as iot can be found if neccessary">Searching form</a></li>
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



<div class="Copyright">
<center> &copy; Copyright 2017 Allright Reserved Smart India Hackathon17
 <small>A Project By Team HackClash - 
Theem College of Engineering</small>
</center></div>
</div>
<div class="top-ref">
	<ul class="nav pull-right scroll-top">
  <li><a href="#" class="top-hover" title="Scroll to top"><span style="color: #fff;">Scroll to Top</span></li>
	</ul>
	</div>
</div>

</footer>