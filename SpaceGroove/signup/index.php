<!DOCTYPE html>
<html>
<head>
	<title>SpaceGroove - Sign Up</title>
	<meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/favicon.ico"/>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="css/styles.css">

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
            <li><a id="chiSiamo" href="../chisiamo/index.php">About us</a></li>
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

	<!-- FORM -->
	<div class="login-dark">
        <form action="registration.php" method="POST" name="signup" onSubmit="return validaForm();">
            <h6>Sign up to stay updated!</h6><br>
			<div class="form-group">
				<input class="col" type="text" name="name" maxlength="20" placeholder="First Name *" autofocus onChange="return controllaNome();">
				<input class="col" type="text" name="surname" maxlength="20" placeholder="Last Name *" onChange="return controllaCognome();">
				<input class="form-control" type="text" name="tel" placeholder="Number" size="16" maxlength="16" minlength="10" onChange="return controllaNumero();">
				<input class="form-control" type="email" name="email" placeholder="Email *">
				<input class="form-control" type="email" name="email_confirm" placeholder="Confirm Email *">
				<input class="col" type="password" name="password" minlength="5" maxlength="10"  placeholder="Password 🔒 *" >
				<input class="col" type="password" name="password_confirm" minlength="5" maxlength="10" placeholder="Confirm Password 🔒 *" >
			
				<br><br>
				<h6>If you are from another planet, please let us know more about you 🌍:</h6>
				<input class="form-control" type="text" name="specie" placeholder="Specie 👽" list="aliensList">
					<datalist id="aliensList">
						<option value="terrestrial">
						<option value="martian">
						<option value="jovian">
					</datalist>
				<select class="form-control" name="planet">
					<option value="" disabled selected>Planet 🪐</option>
					<option value="earth">Earth</option>
					<option value="mars">Mars</option>
					<option value="saturn">Saturn</option>
					<option value="neptune">Neptune</option>
					<option value="jupiter">Jupiter</option>
					<option value="uranus">Uranus</option>
					<option value="moon">Moon</option>
					<option value="mercury">Mercury</option>
					<option value="venus">Venus</option>
					<option value="other">Another Galaxy ✨</option>
				</select><br>
			
				<button class="btn-primary" name="registrationButton" type="submit"><h6>Register</h6></button>
				<button class="btn-primary" type="reset"><h6>Reset</h6></button>
				<br><br>
				<h6>Do you already have an account? <a href="../login/index.php">Log in</a></h6>
			</div>
		</form>
    </div>
	<!-- FORM ENDS -->

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
	
	<script src="js/my_script.js" type="text/javascript"></script>

</body>
</html>