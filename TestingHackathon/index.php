<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

	<script src="js/jquery.min.js"></script><!-- jquery for transitions js-->
	<script src="js/bootstrap.min.js"></script><!-- bootstrap min js-->
	<script src="js/bootstrap.js"></script><!-- bootstrap js-->
    <script src="js/alert_tut.js"></script><!-- for slider-->


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
		<center><img class="img-responsive logoHeader" src="images/img/NEI.jpg" alt="NEI-image" width="75px" height="90px"></center>
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
			<li><a href="index.php">Home</a></li>

		    <li><a href="php/tender-view.php">Tender view</a></li>
		    <li><a href="#">Tender Notices</a></li>
		    <li><a href="php/tender-download.php">Downloads</a></li>
		    <li><a href="php/login.php">Login</a></li>
			<li><a href="php/tender-support.php">Help and Support</a></li>
			<li><a href="php/tender-contact.php">Contact Us</a></li>
			<li><a href="php/tender-about-us.php">About Us</a></li>
			<li><a href="php/tender-search.php">Tender Search</a></li>
			<!--<li><a href="#">About Us</a></li>-->
	    </ul>		
	   </div>
	</nav>
	</div>

	<main>
 
<h1 style="margin:20px;padding-top: 30px;" class="font-white-centerised">Hot Tender Showcase</h1>
 <h4 style="margin:20px;padding-bottom: 20px;" class="font-white-centerised">Latest updates of New Government Tenders</h4>
 
 <div id="<myCarousel></myCarousel>" class="carousel essential" data-ride="carousel">
	<div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="images/header/image1.jpg" alt="header-image-1" width="auto" height="auto">
      </div>

      <div class="item">
        <img src="images/header/image2.jpg" alt="header-image-2" width="auto" height="auto">
      </div>
    
      <div class="item">
        <img src="images/header/image3.jpg" alt="header-image-3" width="auto" height="auto">
      </div>
      <div class="item">
        <img src="images/header/image4.jpg" alt="header-image-4" width="auto" height="auto">
      </div>

    <!--<div class="item">
        <img src="images/header/.jpg" alt="image-name" width="auto" height="345px">
      </div>-->
    </div>
   </div>

<div class="col-md-10 font-white container">

<h2>E -Tendering Solution and why?</h2>
<p>Large organizations are characterized by multiple tendering/procurement needs. In many cases, the information systems or tendering systems they work on are dissimilar i.e. they vary with suppliers and their categories of products are not well sorted out. In conventional tendering systems, the procurement process is long-winded and slow; the suppliers' expertise is not appropriately channeled and opens up huge possibilities for adversarial attitudes and conflicts.gement solution provides an environment for requisitions management, bidding information management, tender documents management, suppliers offerings management, and much more.</p>

<p>The e-Tendering System (or Electronic Tendering System or e-procurement system or e-bidding system), is a tool to automate the entire tendering lifecycle for procurement of goods and services starting from creation of a purchase requisition through to the award of contract. It creates a scenario in which digitally authenticated information is accessed and transmitted between user entities (buyers and suppliers) in a secure environment. It facilitates transparency in tendering or procurement, in combination with adequate demand forecasting, giving customers and suppliers certainty over demand and bringing total production in line with total demand. Along with this, price fluctuations and risks to security of supply are reduced. by accident, sometimes on purpose (injected humour and the like).</p>

</div>
 

   <div class="col-md-2 font-white">

<marquee direction="up" scrollamount="2">
	
<b><ul class="news-marquee">
	<li><a href="#" id="">Road Tender</a></li>
	<li><a href="#" id="">Airline tender</a></li>
	<li><a href="#" id="">Marine tender</a></li>
	<li><a href="#" id="">Medicinal Requirement Tender</a></li>
	<li><a href="#" id="">Metallurgy Tender</a></li>
</ul></b>

</marquee>
</div>
 </main>

	<aside class="col-md-12 sponsor">
		<center><h3>Sponsors</h3></center>
<marquee behavior="right" scrollamount="5" >
		<img src="images/sponsor/img1.png" width="190" height="125" alt="sponsor 1">

		<img src="images/sponsor/img2.jpg" width="190" height="125" alt="sponsor 2">

		<img src="images/sponsor/img3.jpg" width="190" height="125" alt="sponsor 3">

		<img src="images/sponsor/img4.jpg" width="190" height="125" alt="sponsor 4">

		<img src="images/sponsor/img5.png" width="190" height="125" alt="sponsor 5">

		<img src="images/sponsor/img6.jpg" width="190" height="125" alt="sponsor 6"><br>
	</marquee>
	</aside>
	
<footer>

<div class="col-md-12 footer">

<div class="nav-footer">
<ul>
	<li><a href="../index.php">Home</a></li>
	<li><a href="php/tender-view.php">Tender View</a></li>
	<li><a href="#">Tender Notice</a></li>
	<li><a href="php/tender-search.php">Tender Search</a></li>
	<li><a href="php/tender-download.php">Downloads</a></li>
	<li><a href="php/tender-login.php">Login</a></li>
	<li><a href="php/tender-about-us.php">About Us</a></li>
	<li><a href="php/tender-support.php">Help and Support</a></li>
	<li><a href="php/tender-contact.php">Contact Us</a></li>
</ul>


<ul class="footer-right">
	<li><a href="#"><img src="images/social-link/tw.png" class="twitter" alt="Twitter" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="images/social-link/fb.png" class="facebook" alt="facebook" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="images/social-link/google+.png" class="gplus"  alt="gplus" height="40px" width="40px"></a></li>
	<li><a href="#"><img src="images/social-link/li.png" class="linkedin" alt="linkedin" height="40px" width="40px"></a></li>
</ul>

<div class="copyright">
<center> &copy; Copyright 2017 Allright Reserved Smart India Hackathon17
 <small>A Project By Team HackClash - Theem College of Engineering</small>
</center></div>
</div>
<div class="top-ref">
	<ul class="nav pull-right scroll-top">
  <li><a href="#" class="index-error-1" title="Scroll to top">Scroll to Top</li>
	</ul>
	</div>
</div>
</footer>
</body>
</html>