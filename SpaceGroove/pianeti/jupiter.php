<!DOCTYPE html>
<html lang="en">
<head>
    <title>Jupiter</title>
    <meta name="author" content="Alessandro Nicolella and Marzia Moscatelli">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	  <meta name="viewport" content="width=device-width initial-scale=1 shrink-to-fit=no">
    
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/styles.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Roboto:100,300,100italic,400,300italic' type='text/css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=New+Tegomin&display=swap" type="text/css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" type="text/css" rel="stylesheet">
</head>

<body>
  <span id="top"></span>
	<nav class="navbar">
		<a class="logo" href="../index.php"><img src="../images/rocket.png" alt="logo" style="position:absolute; top:5px;"></a>
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
      <h2 id="text" style="right: 25px;">Jupiter</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Jupiter, <span class="text-muted"> the grandest planet</span></h2>
              <p class="lead">Giant auroras, raging clouds and a storm three centuries in the making - our solar system's largest planet is every bit as dramatic as its tempestuous appearance suggests.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/Jupiter_and_its_shrunken_Great_Red_Spot.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1610: <span class="text-muted">The first detailed observations</span></h2>
              <p class="lead">While Jupiter has been known since ancient times, the first detailed observations of this planet were made by Galileo Galilei in 1610 with a small telescope.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 60px;">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/Sketches-that-Galileo-made-of-Jupiter-and-the-changing-positions-of-its-four-Galilean.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1973: <span class="text-muted"> Pioneer 10</span></h2>
              <p class="lead">Pioneer 10 becomes the first spacecraft to cross the asteroid belt and fly past Jupiter.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/thequint2F2017-062F0bd6c3b0-80fa-4765-adbb-592f569698282F3ae9f262-ffa1-46ed-a765-ec6761c8bc70.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1979: <span class="text-muted"> Voyager 1 e 2</span></h2>
              <p class="lead">Voyager 1 and 2 discover Jupiter's faint rings, several new moons and volcanic activity on Io's surface.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/voyager2B12Be2B22B402Banni2Bspazio2Bscienza2Bthecosmobserver2Bcosmobserver2Bnasa2Btitan2Bgiove2Bsatu.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2000: <span class="text-muted"> Cassini</span></h2>
              <p class="lead">Cassini makes its closest approach to Jupiter at a distance of approximately 6.2 million miles (10 million kilometers), taking a highly detailed true color mosaic photo of the gas giant.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/Cassini_s_view_of_Jupiter_s_southern_hemisphere.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2011: <span class="text-muted">Juno</span></h2>
              <p class="lead">Juno launches to examine Jupiter's chemistry, atmosphere, interior structure and magnetosphere.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/pia23444-1600.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 35px;">
              <h2 class="featurette-heading">2016: <span class="text-muted"> an in-depth investigation</span></h2>
              <p class="lead">NASA's Juno spacecraft arrives at Jupiter, conducting an in-depth investigation of the planet's atmosphere, deep structure and magnetosphere for clues to its origin and evolution.​</p>
            </div>
            <div class="col-md-5" style="top: 35px;">
              <img class="featurette-image img-fluid mx-auto" src="images/jupiter/960.png" alt="Generic placeholder image">
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