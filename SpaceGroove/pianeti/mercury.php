<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mercury</title>
    <meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">

    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' type='text/css' rel='stylesheet'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' type='text/css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Cabin:wght@500&display=swap" rel="stylesheet">
</head>

<body>
  <span id="top"></span>
	<nav class="navbar">
		<a class="logo" href="../index.php"><img src="../images/rocket.png" alt="logo" style="position:absolute; top:5px;"></a>
    <ul class="menu">
        <li><a href="../index.php">Home</a></li>
        <li><a href="javascript:redirection('pianeti')">Planets</a></li> <!-- ../index.html#pianeti non funziona in Safari -->
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

	  <div class="hamburger">
        <span></span>
        <span></span>
        <span></span>
    </div>
  </nav>

  <section id="sfondo">
      <img src="sfondo/stars.png" id="stars">
      <img src="sfondo/moon.png" id="moon">
      <img src="sfondo/mountains_behind.png" id="mountains_behind">
      <h2 id="text" style="right:0px;">Mercury</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main" id="sec">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">Mercury, <span class="text-muted">a world of extremes</span></h2>
              <p class="lead">Mercury has the shortest and fastest orbit around the Sun and experiences dramatic temperature changes as it rotates. It's the smallest planet in our solar system — only slightly larger than Earth's Moon. </p>
            </div>
            <div class="col-md-5" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/960x0.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="top: 50px;">
              <h2 class="featurette-heading">1631: <span class="text-muted">the discovery</span></h2>
              <p class="lead">Thomas Harriott and Galileo Galilei observe Mercury with the newly invented telescope. Pierre Gassendi uses a telescope to watch from Earth as Mercury crosses the face of the Sun.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/Harriot_Lunar_Map.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1965: <span class="text-muted">long days, short years</span></h2>
              <p class="lead">Incorrectly believing for centuries that the same side of Mercury always faces the Sun, astronomers using radar find that the planet rotates three times for every two orbits.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/messenger45-caloris_color.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">1991: <span class="text-muted"> signs of ice locked</span></h2>
              <p class="lead">Scientists using Earth-based radar find signs of ice locked in permanently shadowed areas of craters in Mercury's polar regions.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/maxresdefault.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7"  data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">2008-2015: <span class="text-muted">Messenger</span></h2>
              <p class="lead"> MESSENGER observes Mercury during three flybys. <br> In 2011 it begins its orbital mission at Mercury, yielding a treasure trove of images, compositional data, and scientific discoveries. <br> In 2015 MESSENGER is deliberately crashed into Mercury after expending all its propellant, ending its mission.​</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/meggenger-in-orbita.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2018: <span class="text-muted">BepiColombo</span></h2>
              <p class="lead">BepiColombo launches with a target date for Mercury orbit insertion of 2025.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mercury/BepiColombo-Iridescent-Mercury.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

        </div>
        <!-- END THE FEATURETTES -->
    </main>
    
  </div>

  <!-- FOOTER -->
	<footer id="footer">
		<div class="container">
		  <p class="float-left">&copy; 2021 SpaceGroove | Web Languages and Technologies' project, by A. Nicolella and M. Moscatelli</p>
		  <p class="float-right"><a href="#top">Back to top</a></p>
		</div>
	</footer>
	<!-- FOOTER ENDS -->

	<script src="../js/bootstrap.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- per SMOOTH SCROLL -->
	<script src="../js/smooth_scroll.js"></script> <!-- SMOOTH SCROLL-->
	<script src="../js/scrollReveal.min.js" type="text/javascript"></script> <!-- SCROLL REVEAL -->
	<script src="../js/functions.js" type="text/javascript"></script>
  <script src="js/popper.min.js"></script>

	<!-- HAMBURGER -->
	<script>
		$(document).ready(function() {
    		$(".hamburger").on('click', function(){
        		$(".menu").toggleClass("menuopen")
    		});
		});
	</script>

  <!-- HEADER -->
  <script>
    let stars = document.getElementById('stars');
    let moon = document.getElementById('moon');
    let mountains_behind = document.getElementById('mountains_behind');
    let text = document.getElementById('text');
    let btn =document.getElementById('btn');
    let mountains_front =document.getElementById('mountains_front');

    window.addEventListener('scroll', function(){
      let value= window.scrollY;
      stars.style.left = value *0.25 + 'px';
      moon.style.top= value*1.05 +'px';
      mountains_behind.style.top= value*0.5 +'px';
      mountains_front.style.top= value*0 +'px';
      text.style.marginRight = value*2 +'px';
      btn.style.marginTop= value*1.5+'px';
    })
  </script>
    
</body>
</html>