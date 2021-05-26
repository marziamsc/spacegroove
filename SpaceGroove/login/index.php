<!DOCTYPE html>
<html>
<head>
	<title>SpaceGroove - Log In</title>
	<meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    <link rel="shortcut icon" href="../images/favicon.ico"/>

	<link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
	<link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="css/styles.css">

	<!-- OUR FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' type='text/css' rel='stylesheet'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' type='text/css' rel='stylesheet'>
	<link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" type="text/css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">

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
			<li class='account'><a  href='../signup/index.php'>Sign Up</a></li>
			<li class='account'><a  href='../login/index.php'>Log In</a></li>
		</ul>
		
		<div class="hamburger">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
	<!-- NAVBAR ENDS -->

	<!-- FORM -->
	<div class="login-dark">
        <form action="login.php" method="POST" name="login" onSubmit="return validaForm();">
            <div class="illustration"><span class="icon ion-ios-locked-outline"></span></div>
            <div class="form-group">
				<input class="form-control" type="email" id="email" name="email" placeholder="Email" autofocus>
            	<input class="form-control" type="password" id="pass" name="password" maxlength="10" placeholder="Password">
				<label class="cont">
					<input type="checkbox" onclick="passVisibility()">Show password
					<span class="checkmark"></span>
				</label>
				<br>
				<button class="btn-primary" type="submit" id="loginButton" name="loginButton">Log In</button>
				<button class="btn-primary" type="reset">Reset</button><br><br>
				<h6>Don’t have an account? <a href="../signup/index.php">Register</a></h6>
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