<!DOCTYPE html>
<html>
<head>
	<title>SpaceGroove - Planets Details</title>
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
			<li><a href="#" class="current">Planets Details</a></li>
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
        <span>
            <h6>What do you want to know?</h6><br>
			<div class="form-group">
				<select class="form-control" id="planet" name="planet">
					<option value="" disabled selected>Planet 🪐</option>
					<option value="Earth">Earth</option>
					<option value="Mars">Mars</option>
					<option value="Saturn">Saturn</option>
					<option value="Neptune">Neptune</option>
					<option value="Jupiter">Jupiter</option>
					<option value="Uranus">Uranus</option>
					<option value="Moon">Moon</option>
					<option value="Mercury">Mercury</option>
					<option value="Venus">Venus</option>
				</select>
				<select class="form-control" id="info" name="info">
					<option value="" disabled selected>Info</option>
					<option value="planettype">Planet Type</option>
					<option value="equatorialradius">Equatorial Radius</option>
					<option value="averagedistancefromsun">Average Distance to the Sun</option>
					<option value="surfacetemperature">Surface Temperature</option>
					<option value="daylength">Rotation Period (Earth Days)</option>
					<option value="yearlength">Orbit Period (Earth Years)</option>
					<option value="surfacegravity">Surface Gravity</option>
					<option value="atmosphericConstituents">Atmospheric Constituents</option>
					<option value="rings">Rings</option>
					<option value="moons">Moons</option>
					<option value="escapevelocity">Escape Velocity</option>
					<option value="density">Density</option>
					<option value="mass">Mass</option>
					<option value="volume">Volume</option>
				</select><br>
			
				<button class="btn-primary" id="ask" type="submit">Ask</button>
			</div>
		</span> 

		<span class="row featurette" style="top:70%; left:51%">
			<div id="zona_din"></div>
		</span>

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

	<script>
	$(document).ready(function() {
    	$('#ask').click(function() {
    		var planet = $("#planet").val();
			var info = $("#info").val();
    
    		$.ajax({
    			type: "POST",
            	url: "ask.php",
            	data: {"planet": planet, "info": info},
           		dataType: "html",
            	contentType: 'application/x-www-form-urlencoded',
            	timeout: 3000,
            	success: function(risultato){
            		$("#zona_din").html(risultato);
            	},
            	error: function(jqXHR, exception){
            		var msg = "";
                	if (jqXHR.status === 0) {
                    	msg = "Nessuna connessione. Controllare la rete.";
                	} else if (jqXHR.status == 404) {
                    	msg = "Pagina non trovata! [404].";
                	} else if (jqXHR.status == 500) {
                    	msg = "Errore interno al server [500].";
                	} else if (exception === "parsererror") {
                   	 	msg = "Richiesta di analisi JSON non riuscita.";
                	} else if (exception === "timeout") {
                   	 	msg = "Chiamata fuori tempo massimo.";
                	} else if (exception === "abort") {
                   	 	msg = "Richiesta AJAX abbortita.";
                	} else {
                    	msg = "Errore non definito. " + jqXHR.responseText;
					}
					$("#zona_dim").html('<h3 style="color: red">'+msg+'</h3>');
            	}
    		});

        });
    });
	</script>

	<script src="js/my_script.js" type="text/javascript"></script>

</body>
</html>