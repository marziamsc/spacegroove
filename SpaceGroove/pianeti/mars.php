<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mars</title>
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
      <h2 id="text">Mars</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">Mars, <span class="text-muted">the Red Planet</span></h2>
              <p class="lead">Iron in the rocks and dust on Mars's surface is oxidising in the thin atmosphere, giving the planet its warm, rust-coloured hue.
                <br><br>Mars is known as the Rusty Planet because iron minerals in the Martian soil oxidize, or rust, causing the soil and atmosphere to look red.
                <br>It is a rocky planet. Its solid surface has been altered by volcanoes, impacts, winds, crustal movement and chemical reactions.
                <br>Mars is also a dynamic planet with seasons, polar ice caps, canyons, extinct volcanoes, and evidence that it was even more active in the past.
                <br><br>Mars is the fourth planet from the Sun.</p>
            </div>
            <div class="col-md-5" style="top: 150px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/martian-meteorite-clues-of-life-on-mars.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="top: 30px;">
              <h2 class="featurette-heading">1570 BC to 1293 BC: <span class="text-muted">Egyptians Show Knowledge of Mars</span></h2>
              <p class="lead">As early as the 28th Dynasty of the New Kingdom, Egyptians refer to Mars as "Horus of the Horizon", a God whom they depicted as a human with the head of a hawk. They also spoke of the planet travelling backwards, a reference to its retrograde motion.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/6ac0c73e57ed292dc2a3f3b0c66b0cb4.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">~300 BC: <span class="text-muted">Aristotle Note Mars Farther from Earth than the Moon</span></h2>
              <p class="lead">Aristotle (384-322 BC), the Greek philosopher, happens to observe an occultation of Mars by the Moon. From seeing the Moon pass in front of Mars, Aristotle concludes that Mars is higher up in the heavens than the Moon.</p>
            </div>
            <div class="col-md-5" style="top: 100px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/bf6c500d2b4d3884f2b1ac4bf3e875bd.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" >
              <h2 class="featurette-heading">1609-1610: <span class="text-muted">Galileo Makes First Telescopic Observation of Mars and Notes Phases on Mars</span></h2>
              <p class="lead">Galileo Galilei (1564-1642), a professor at the University of Padua in Venice, Italy, uses the telescope, invented in 1608, to observe Mars, a first.
                  <br>He reports in a letter, dated December 30, 1610, to a friend that "I dare not affirm that I was able to observe the phases of Mars; nevertheless, if I am not mistaken, I believe that I have seen that it is not perfectly round."
              </p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 200px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/EQ00OfOUUAEXxeh.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">1877: <span class="text-muted">Schiaparelli Produces Map of Mars with Canali</span></h2>
              <p class="lead">Giovanni Schiaparelli (1835-1910), an Italian astronomer, produces a detailed map of Mars based on his observations of the planet with an 8.5 inch refractor during a favorable conjunction. His map gave classical names to the features he observed. These feature names became widely accepted. This map is also famous for the inclusion of features Schiaparelli identified as canali, an Italian word for a naturally occuring channel.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/Map_of_Mars_by_Schiaparelli_1888.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;" >
              <h2 class="featurette-heading">1877: <span class="text-muted">Asaph Hall Discovers Moons of Mars</span></h2>
              <p class="lead">Asaph Hall (1829-1907), an American astronomer, during a favorable conjunction of Mars discovers that the planet has two moons with the 26 inch refractor at the US Naval Observatory. His initial observation was made on August 12. His first observation of the second moon occurred on August 18. Additional observations thru the 20th convinced him of his discovery.
                  <br><br>The two moons are named for two sons of Ares, the God of War: Phobos (Greek for fear) and Deimos (Greek for terror). See Observations and Orbits of the Satellites of Mars, Asaph Hall, 1878, Washington DC.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/Professor_Asaph_Hall.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">1960-1964: <span class="text-muted">Soviet failures</span></h2>
              <p class="lead">The Soviet Union leads the way in space missions, sending probes from 1960, just three years after it launched its first artificial satellite Sputnik I. But it clocks up a string of failures, including Marsnik 1 and 2, the first two probes launched in October 1960, which do not reach the Earth's orbit.
                  <br><br>Zond 2 launched in 1964 is the first probe to get close to Mars, although it does not manage to carry out an observation of the planet</p>
            </div>
            <div class="col-md-5" style="top: 100px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/5a1d59bafc7e93a8578b4567.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 35px;">
              <h2 class="featurette-heading">1964-1965: <span class="text-muted">First successful flyby mission to Mars</span></h2>
              <p class="lead">One of the great successes of the early American space program, the Mariner 4 mission journeyed to Mars -- making its closest approach on July 15, 1965 -- and took the first photos of another planet from space.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/38269_Mars-Mariner-4-flyby-orbiters-more-craters-memnonia-Fossae-2.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 20px;">
              <h2 class="featurette-heading">1976: <span class="text-muted">Complete Missions!</span></h2>
              <p class="lead">The U.S. becomes the first nation to make vessels function on Mars. In July 1976, Viking 1 becomes the first spaceship to successfully land on the planet and complete its mission. Viking 2 follows in its footsteps in September that year.
                  <br><br>Their combined missions allow them to collect more than 50,000 photographs and show there was, to scientists’ dismay, no sign of life on Mars.</p>
            </div>
            <div class="col-md-5" style="top: 100px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/missionswebviking_EemH6A1.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">July 30, 2020: <span class="text-muted">Perseverance Rover Launch</span></h2>
              <p class="lead">The Perseverance rover is now on its way to Mars. It launched on July 30, 2020, at 4:50 a.m. PDT (7:50 a.m. EDT).
                <br><br>Perseverance launched on an Atlas V-541 rocket from Launch Complex 41 at Cape Canaveral Air Force Station, Florida. The Atlas V is one of the largest rockets available for interplanetary flight. This is the same type of rocket that launched the InSight and Curiosity to Mars. The launch vehicle was provided by United Launch Alliance, Centennial Colorado.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 150px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/launchboy.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">February 18, 2021: <span class="text-muted">Entry, Descent, and Landing</span></h2>
              <p class="lead">NASA's Mars Perseverance rover makes its final descent to the Red Planet.
                <br>After eight months hurtling through space, the rover has successfully landed and begun its mission. This is NASA's first major return to Mars since the Curiosity rover landed in 2011!
                <br><br>Physical samples may not return to Earth until 2031, but Perseverance's cameras allow scientists to examine the surface of Mars almost immediately. These images will give them insight into the geological history of Mars and help them to understand whether the planet holds physical or chemical evidence of life.
                <br><br>It will collect rock samples of interest and then leave them to be returned to Earth at a later date...
              </p>
            </div>
            <div class="col-md-5" style="padding-top: 200px;">
              <img class="featurette-image img-fluid mx-auto" src="images/mars/d41586-021-00698-5_18970446.png" alt="Generic placeholder image">
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