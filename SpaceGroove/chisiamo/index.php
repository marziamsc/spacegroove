<!DOCTYPE html>
<html lang="en">
<head>
	<title>SpaceGroove - About Us</title>
	<meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
	<link rel="shortcut icon" href="images/favicon.ico">

	<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
	<link href="../css/styles.css" type="text/css" rel="stylesheet">
	<link href="css/styles.css" type="text/css" rel="stylesheet"> 

	<!-- OUR FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' type='text/css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" type="text/css" rel="stylesheet">

</head>

<body>
	<span id="top"></span>
    <!-- NAVBAR -->
	<nav class="navbar">
		<a class="logo" href="../index.php"><img src="../images/rocket.png" alt="logo"></a>
        <ul class="menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="javascript:redirection('pianeti')">Planets</a></li> <!-- ../index.html#pianeti non funziona in Safari-->
            <li><a class="current" id="chiSiamo" href="../chisiamo/index.php">About us</a></li>
			<li><a href="../infopianeti/index.php">Planets Details</a></li>
			<?php
			session_start();
			if(!isset($_SESSION['name'])){
				echo "<li class='account'><a  href='../signup/index.php'>Sign Up</a></li>
					<li class='account'><a  href='../login/index.php'>Log In</a></li>";
			}
			else {
				echo "<li><a id='giudizio' href='../feedback/index.php'>Give your feedback!</a></li>";
				echo "<li class='account'><a  href='../logout/index.php'>Log out</a></li>";
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
		<div class="container ">
			<div class="row">

				<div class="col-xs-12 mb-4 heading-title text-center">
					<h1>OUR TEAM</h1>
					<h5>1. This site was created for our Web Languages and Technologies' project<br>
						2. We love space! So we wanted to celebrate NASA's Mars 2020 mission and Perseverance rover with a web site to learn about our Solar System.</h5>
				</div>

				<div class="row col-xs-12">
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-md-12 text-center" > <!--style="left: 350px"-->
							  <img src="images/MM.JPG" alt="wrapkit" class="img-fluid rounded-circle"/>
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 class="mt-4 font-weight-medium mb-0">Marzia Moscatelli</h2>
								<h5 class="subtitle mb-3">Student in Computer and System Engineering</h5>
								<p></p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-6 mb-4">
						<div class="row">
							<div class="col-md-12 text-center"><!--style="left: 500px;"-->
							  <img src="images/AN.PNG" alt="wrapkit" class="img-fluid rounded-circle" />
							</div>
							<div class="col-md-12 text-center">
							  <div class="pt-2">
								<h2 class="mt-4 font-weight-medium mb-0">Alessandro Nicolella</h2>
								<h5 class="subtitle mb-3">Student in Computer and System Engineering</h5>
								
							</div>
						</div>
					</div> 
				</div>

			</div>
		</div>
	</section>
	<!-- HEADER ENDS -->

	<!-- FOOTER -->
	<footer id="footer">
		<div class="container">
		  <p class="float-left">&copy; 2021 SpaceGroove | Web Languages and Technologies' project, by A. Nicolella and M. Moscatelli</p>
		  <p class="float-right"><a href="#top">Back to top</a></p>
		</div>
	</footer>
	<!-- FOOTER ENDS -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/smooth_scroll.js"></script> <!-- SMOOTH SCROLL-->
	<script src="../js/scrollReveal.min.js" type="text/javascript"></script> <!-- SCROLL REVEAL -->
	<script src="../js/functions.js" type="text/javascript"></script>

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