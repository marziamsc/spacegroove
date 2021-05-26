<!DOCTYPE html>
<html lang="en">
<head>
    <title>Saturn</title>
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
				  echo "<li class='account'><a  href='../ignup/index.php'>Sign Up</a></li>
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
      <h2 id="text" style="right: 50px;">Saturn</h2>
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
              <h2 class="featurette-heading">Saturn, <span class="text-muted">blue skies on a golden planet</span></h2>
              <p class="lead">Saturn is a planet of contrasts and surprises. It's the sixth planet from the Sun and the second largest planet in our solar system. Adorned with thousands of beautiful ringlets, Saturn is unique among the planets. Saturn is a massive ball made mostly of hydrogen and helium.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/saturn.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">~700 BCE: <span class="text-muted">"Star of Ninib"</span></h2>
              <p class="lead">The oldest written records documenting Saturn are attributed to the Assyrians. They described the ringed planet as a sparkle in the night and named it "Star of Ninib."</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/mesopotamia.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">~400 BCE: <span class="text-muted">the god of agriculture</span></h2>
              <p class="lead">Ancient Greek astronomers name what they think is a wandering star in honor of Kronos, the god of agriculture. The Romans later change the name to Saturn, their god of agriculture</p>
            </div>
            <div class="col-md-5" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/2bda87f23880278d676022f1255604ef.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">July 1610: <span class="text-muted">a "triple planet"</span></h2>
              <p class="lead">Galileo Galilei spots Saturn's rings through a telescope, but mistakes them for a "triple planet".</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 40px;">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/galileo-drawing-saturns-ears.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">1655 and 1675 <span class="text-muted">Saturn's rings</span></h2>
              <p class="lead">In 1655 Christiaan Huygens discovers Saturn's rings and its largest moon, Titan. In 1675 Italian-born astronomer Jean-Dominique Cassini discovers a "division" between what are now called the A and B rings.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/cassini.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Sept. 1, 1979: <span class="text-muted">Pioneer 11</span></h2>
              <p class="lead">Pioneer 11 is the first spacecraft to reach Saturn. Among Pioneer 11's many discoveries are Saturn's F ring and a new moon.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/PHY_pioneer.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">1980 and 1981:  <span class="text-muted">the intricate structure of the ring system</span></h2>
              <p class="lead">In its 1980 flyby of Saturn, Voyager 1 reveals the intricate structure of the ring system, consisting of thousands of ringlets. Flying even closer to Saturn in 1981, Voyager 2 provides more detailed images and documents the thinness of some of the rings.</p>
            </div>
            <div class="col-md-5" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/Saturn-rings.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;"> 
              <h2 class="featurette-heading">July 1, 2004: <span class="text-muted">a decade-long mission</span></h2>
              <p class="lead">NASA's Cassini spacecraft becomes the first to orbit Saturn, beginning a decade-long mission that revealed many secrets and surprises about Saturn and its system of rings and moons.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/CassiniE28093Huygens.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 50px;">
              <h2 class="featurette-heading">Jan. 14, 2005: <span class="text-muted">Saturn's giant moon Titan</span></h2>
              <p class="lead">The European Space Agency's Huygens probe is the first spacecraft to make a soft landing on the surface of another planet's moon — Saturn's giant moon Titan. The probe provides the first direct study of Titan's atmosphere and the first-and-only direct images of Titan's surface, which is shrouded by thick</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/https3A2F2Fblogs-images.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">Sep. 15, 2017: <span class="text-muted">Cassini ends its mission</span></h2>
              <p class="lead">Cassini ends a 13-year orbital mission with a spectacular, planned plunge into Saturn’s atmosphere — sending science data back to the last second. Cassini’s final five orbits enable scientists to directly sample Saturn’s atmosphere for the first time</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 30px;">
              <img class="featurette-image img-fluid mx-auto" src="images/saturn/PIA21438.png" alt="Generic placeholder image">
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