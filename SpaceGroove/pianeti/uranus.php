<!DOCTYPE html>
<html lang="en">
<head>
    <title>Uranus</title>
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
      <h2 id="text" style="right: 10px;">Uranus</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" style="bottom: 40px;" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Uranus, <span class="text-muted">the “sideways planet”</span></h2>
              <p class="lead">Cold, dark and windswept - despite its calm appearance, the ice giant Uranus is a planet of extremes.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/Webp.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Mar. 13, 1781: <span class="text-muted">the first planet found using a telescope</span></h2>
              <p class="lead">British astronomer William Herschel discovers Uranus — the first new planet discovered since ancient times - while searching for faint stars.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/Herschel-2.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">1787-1948: <span class="text-muted">a lot of moons</span></h2>
              <p class="lead">Five Uranian moons are discovered and named Titania, Oberon, Ariel, Umbriel and Miranda</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/the-moons-of-uranus17351433436046.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">Mar. 10, 1977: <span class="text-muted">Uranus is a ringed planet</span></h2>
              <p class="lead">While observing Uranus' passing in front of a distant star (SAO 158687), scientists at the Kuiper Airborne Observatory and the Perth Observatory in Australia were eager for a rare chance to observe the distant planet. Observations before and after the main event led to a major discovery: Uranus, like Saturn, is encircled with rings.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 25px;">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/should-we-send-a-spacecraft-to-explore-uranus-4ec2cb4.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">Jan. 24, 1986: <span class="text-muted">the first visit to Uranus</span></h2>
              <p class="lead">NASA's Voyager 2 made the first - and so far the only - visit to Uranus. The spacecraft came within 50,600 miles (81,500 kilometers) of the planet's cloud tops. Voyager discovered 10 new moons, two new rings and a magnetic field stronger than that of Saturn.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/voyager2B12Be2B22B402Banni2Bspazio2Bscienza2Bthecosmobserver2Bcosmobserver2Bnasa2Btitan2Bgiove2Bsatu.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">Dec. 2007: <span class="text-muted">Uranus reaches equinox.</span></h2>
              <p class="lead">Equinox is when the planet is fully illuminated as the Sun passes over its equator. Equinox also brings a ring-plane crossing, when Uranus' rings appear to get narrower as they pass through, appearing edge-on and then widen again as seen from Earth.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/uranus-seasons-orbit-lg-e1485185411910.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">Mar. 18, 2011: <span class="text-muted">a bit lonely</span></h2>
              <p class="lead">New Horizons passes the orbit of Uranus on its way to Pluto, becoming the first spacecraft to journey beyond Uranus' orbit since Voyager 2. However, Uranus was not near the crossing point. The spacecraft is asleep during most of its eight-year interplanetary trek from Jupiter to Pluto. Mission controllers do wake up New Horizons for 50 days each year to perform necessary checkups on its instruments.​</p>
            </div>
            <div class="col-md-5" style="top: 60px;">
              <img class="featurette-image img-fluid mx-auto" src="images/uranus/pluto-newhorizons-e1435599288265-879x460.png" alt="Generic placeholder image">
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