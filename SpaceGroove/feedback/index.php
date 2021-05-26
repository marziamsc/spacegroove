<!DOCTYPE html>
<html>
<head>
	<title>SpaceGroove - Feedback</title>
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
			<li><a id="giudizio" class="current" href="#">Give your feedback!</a></li>
			<li class='account'><a  href='../logout/index.php'>Log out</a></li>
		</ul>
		<?php
			session_start();
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
            <div class="illustration"><div class="icon ion-ios-paperplane-outline"></div></div>
            <div class="form-group">
				Please give a feedback to us if you feel satisfied about our web site!
				<br><br>
					
				<select class="form-control" name="rate" id="rate">
					<option value="1">⭐️</option>
					<option value="2">⭐️⭐️</option>
					<option value="3">⭐️⭐️⭐️</option>
					<option value="4">⭐️⭐️⭐️⭐️</option>
					<option value="5">⭐️⭐️⭐️⭐️⭐️</option>
				</select>
				
				<button class="btn-primary" name="fbButton" id="fbButton" type="submit">Send</button>
			</div>
			<br>
		</span>
		<h6 id="zona_feed" style="position:fixed; top:50%; left:44%;"></h6>

		<div class="alt" name="userRating">
			<button class="btn-primary" name="avg" class="din">Users Rating</button><br><br>
			<div class="row featurette">
				<div id="zona_din"></div>
			</div>
		</div>

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

	<!-- AJAX -->
	<script>
		var documenti = document.getElementsByName("avg");
    	for (var i = 0; i < documenti.length; i++) {
        	documenti[i].onclick = caricaDocumento;
      	}
      	function caricaDocumento(e) {
       	 	var httpRequest = new XMLHttpRequest();
        	httpRequest.onreadystatechange = gestisciResponse;
        	httpRequest.open("GET", e.target.innerHTML + ".php", true);
        	httpRequest.send();
      	}
      	function gestisciResponse(e) {
        	if (e.target.readyState == XMLHttpRequest.DONE && e.target.status == 200) {
          		document.getElementById("zona_din").innerHTML = e.target.responseText;
        	}
      	}
	</script> 

<script>
	$(document).ready(function() {
    	$('#fbButton').click(function() {
    		var rate = $("#rate").val();
    
    		$.ajax({
    			type: "POST",
            	url: "feedback.php",
            	data: {"rate": rate},
           		dataType: "html",
            	contentType: 'application/x-www-form-urlencoded',
            	timeout: 3000,
            	success: function(risultato){
            		$("#zona_feed").html(risultato);
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
					$("#zona_feed").html('<h3 style="color: red">'+msg+'</h3>');
            	}
    		});

        });
    });
	</script>

	<script src="js/my_script.js" type="text/javascript"></script>

</body>
</html>