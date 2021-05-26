<!DOCTYPE html>
<html lang="en">
<head>
    <title>Neptune</title>
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
      <h2 id="text" style="right: 40px;">Neptune</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <hr class="featurette-divider">
  
          <div class="row featurette" >
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Neptune </h2>
              <p class="lead">Dark, cold and whipped by supersonic winds, ice giant Neptune is the eighth and most distant planet in our solar system. <br> 
                              More than 30 times as far from the Sun as Earth, Neptune is the only planet in our solar system not visible to the naked eye.</p>
            </div>
            <div class="col-md-5 order-md-1" >
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/neptune-5798425_1280.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1612: <span class="text-muted">Galileo's error</span></h2>
              <p class="lead">Galileo incorrectly records Neptune as a fixed star during observations with his small telescope.</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/16091612265fe9da0a7f796.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
          <div class="row featurette" >
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1846: <span class="text-muted">Discovery of Neptune</span></h2>
              <p class="lead">Using mathematical calculations, astronomers discover Neptune, increasing the number of known planets to eight. Neptune's largest moon, Triton, is found the same year.</p>
            </div>
            <div class="col-md-5 order-md-1" >
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/Triton_28moon29.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1983: <span class="text-muted">Pioneer 10</span></h2>
              <p class="lead">Pioneer 10 crosses the orbit of Neptune and becomes the first human-made object to travel beyond the orbits of the planets of our solar system. The spacecraft remains on a trajectory heading towards the red star Aldebaran (in the constellation Taurus) and is expected to pass by it in about 2,000,000 years.</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/KKHBrF3pDx2z9jQpNrkaRg-WklUcVOCJBoMeduOAo6WEIwr8eVLMxoBmzV0ygXMUyDP8qGoGCo2VlIlftHjPk6vCgoGteoUf-BP8.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
          <div class="row featurette" >
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1984: <span class="text-muted">Neptune's rings</span></h2>
              <p class="lead">Astronomers find evidence for the existence of a ring system around Neptune.</p>
            </div>
            <div class="col-md-5 order-md-1"  style="top: 50px;"  >
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/Slide2_Pic1_636068412273996137.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1989: <span class="text-muted">Voyager 2</span></h2>
              <p class="lead">Voyager 2 becomes the first and only spacecraft to visit Neptune, passing about 4,800 kilometers (2,983 miles) above the planet's north pole.</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/neptune4.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
          <div class="row featurette" >
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2002: <span class="text-muted">Four new moons!</span></h2>
              <p class="lead">Using improved observing techniques, astronomers discover four new moons orbiting Neptune: Laomedia, Neso, Sao and Halimede.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top:50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/lune.jpg" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette" >
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2005: <span class="text-muted">Neptune's rings are fading away</span></h2>
              <p class="lead">Scientists using the Keck Observatory take images of the outer rings and find that some of the ring arcs have deteriorated.</p>
            </div>
            <div class="col-md-5 " style="top: 30px;">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/neptune-rings.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
          <div class="row featurette" >
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2013: <span class="text-muted">The 14th moon</span></h2>
              <p class="lead">A scientist studying Neptune's ring arcs in archival Hubble Space Telescope images finds a previously unknown 14th moon of Neptune, provisionally designated S/2004 N 1, and then formally named Hippocamp.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 30px;">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/Hippocamp-heic1904b.jpg" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
          <div class="row featurette" >
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2016: <span class="text-muted">New dark spot</span></h2>
              <p class="lead">Scientists using the Hubble Space Telescope discover a new dark spot on Neptune, the first new atmospheric vortex seen in the 21st century.</p>
            </div>
            <div class="col-md-5 " style="top: 30px;">
              <img class="featurette-image img-fluid mx-auto" src="images/neptune/36832_orig.jpg" alt="Generic placeholder image">
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