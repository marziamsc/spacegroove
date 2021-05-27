<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpaceGroove - HomePage</title>
	<meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
	<link rel="shortcut icon" href="images/favicon.ico"/>

	<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet"/>
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> <!-- ANGLE-DOWN ANIMATION -->
	<link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css"> <!-- CAROUSEL -->
    
	<!-- OUR FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' type='text/css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" type="text/css" rel="stylesheet">

</head>

<body>
	<span id="top"></span>
	<!-- NAVBAR -->
	<nav class="navbar">
		<a class="logo" href="index.php"><img src="images/rocket.png" alt="logo"></a>
        <ul class="menu">
            <li><a class="current" href="#">Home</a></li>
            <li><a href="#pianeti">Planets</a></li>
            <li><a id="chiSiamo" href="chisiamo/index.php">About us</a></li>
			<li><a href="infopianeti/index.php">Planets Details</a></li>
			<?php
			session_start();
			if(!isset($_SESSION['name'])){
				echo "<li class='account'><a  href='signup/index.php'>Sign Up</a></li>
					<li class='account'><a  href='login/index.php'>Log In</a></li>";
			}
			else {
				echo "<li><a id='giudizio' href='feedback/index.php'>Give your feedback!</a></li>";
				echo "<li class='account'><a  href='logout/index.php'>Log out</a></li>";
			}
			?>
		</ul>
			<?php
			if(isset($_SESSION['name'])){
				$name=$_SESSION['name'];
				echo "WELCOME $name";
			}
			?>
		<div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
	<!-- NAVBAR ENDS -->

	<!-- HEADER -->
	
		<section id="header">
			<div class="container">
				<div class="row text-center">
					<div class="col-md-8">
						<img class="textLogo" alt="SpaceGroove text" src="images/textLogo.png"/>
						<h1 class="white-text">The natural world does not end at the Earth's stratosphere.</h1><br>
						<h6 class="white-text">Our planet is part of a bigger picture - a cosmos which has fascinated humans since we first gazed at the night sky.</h6>
					</div>
				</div>
			</div>
			<div class="animation">
				<a class="arrow-down-animation" data-scroll href="#about"><i class="fa fa-angle-down"></i></a>
			</div>
		</section>
	<!-- HEADER ENDS -->
	
	
	<!-- ABOUT -->
		<section id="about">
			<div class="container">
				<div class="embed-responsive embed-responsive-16by9">
					<iframe src="https://mars.nasa.gov/layout/embed/video/?v=456" width="640" height="370" scrolling="no" frameborder="0"></iframe>
				</div>
			</div>			
		</section>
	<!-- ABOUT ENDS -->
	
	
	<!-- CAROUSEL -->
		<section id="pianeti"> 
			<div class="container">
				<div class="carousel">
					<a href="pianeti/jupiter.php" title="Jupiter"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/giove.png" alt="Jupiter"/></div></a>
					<a href="pianeti/mars.php" title="Mars"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/marte.png" alt="Mars"/></div></a>
					<a href="pianeti/mercury.php" title="Mercury"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/mercurio.png" alt="Mercury"/></div></a>
					<a href="pianeti/neptune.php" title="Neptune"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/nettuno.png" alt="Neptune"/></div></a>
					<a href="pianeti/uranus.php" title="Uranus"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/urano.png" alt="Uranus"/></div></a>
					<a href="pianeti/venus.php" title="Venus"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/venere.png" alt="Venus"/></div></a>
					<a href="pianeti/moon.php" title="Moon"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/luna.png" alt="Moon"/></div></a>
					<a href="pianeti/saturn.php" title="Saturn"><div class="carousel-cell cell-large"><img class="carousel-image large" data-flickity-lazyload="images/pianeti/saturno.png" alt="Saturn"/></div></a>
					<a href="pianeti/earth.php" title="Earth"><div class="carousel-cell"><img class="carousel-image" data-flickity-lazyload="images/pianeti/terra.png" alt="Earth"/></div></a>
				</div>
			</div>
		</section>
	<!-- CAROUSEL ENDS -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
		  <p class="float-left">&copy; 2021 SpaceGroove | Web Languages and Technologies' project, by A. Nicolella and M. Moscatelli</p>
		  <p class="float-right"><a href="#top">Back to top</a></p>
		</div>
	</footer>
	<!-- FOOTER ENDS -->

	<script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- per SMOOTH SCROLL -->
	<script src="js/smooth_scroll.js"></script> <!-- SMOOTH SCROLL-->
	<script src="js/functions.js" type="text/javascript"></script>

	<!-- CAROUSEL -->
	<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script> 
	<script src="js/carousel.js"></script> 
	
	<!-- HAMBURGER -->
	<script>
		$(document).ready(function() {
    		$(".hamburger").on('click', function(){
        		$(".menu").toggleClass("menuopen") 
    		});
		});
	</script>

</body>
</html>