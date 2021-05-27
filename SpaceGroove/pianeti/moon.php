<!DOCTYPE html>
<html lang="en">
<head>
    <title>Moon</title>
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
      <h2 id="text">Moon</h2>
      <a href="#sec" id="btn">Explore</a>
      <img src="sfondo/mountains_front.png" id="mountains_front">
  </section>

  <div class="sec" id="sec">

    <main role="main">

        <!-- START THE FEATURETTES -->
        <div class="container marketing">
  
          <div class="row featurette">
            <div data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">We know the Moon is not a planet... <span class="text-muted">but how can we not talk about it? </span></h2>
            </div>
          </div>

          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">Facts About The Moon</h2>
              <p class="lead">The Moon is Earth’s only natural satellite and the fifth largest moon in the solar system.<br> 
                Its presence helps stabilize our planet’s wobble, which helps stabilize our climate.<br>
                The distance from Earth is about 240,000 miles (385,000km).<br>
                The Moon has a very thin atmosphere called an exosphere and its entire surface is cratered and pitted from impacts.<br></p>
            </div>
            <div class="col-md-5" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/diseminating-moon.png" alt="Generic placeholder image">
            </div>

          </div>
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div data-sr="enter top over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h3 class="featurette-heading">Earth's Moon is the only place beyond Earth where humans have set foot.<br><br></h3>
              <h3 style="color: #e7c415">Only 24 humans have been to the moon in history.<br>
                No one has been back since 1972.</h3>
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom:60px;">
              <h2 class="featurette-heading">32,500+ BCE:  <span class="text-muted">the Moon‘s Phases</span></h2>
              <p class="lead">During the Upper Paleolithic period, early people would keep track of the Moon‘s phases by engraving lines onto animal bones, and it has also been suggested that they might similarly have memorialized certain star patterns in the same way.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/moon-phases_delpixel-ss-resize2.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">450 BC: <span class="text-muted">Reflected Sunlight</span></h2>
              <p class="lead">Anaxagoras shows that the Moon shines by reflected sunlight.</p>
            </div>
            <div class="col-md-5" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/solar-eclipse-2017-2670350.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">150 BC: <span class="text-muted">Distance From the Earth</span></h2>
              <p class="lead">Hipparchus uses parallax to determine that the distance to the Moon is roughly 380,000 km</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 20px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/cZC_qhrCSahEGlIQw0Z-PeqnQdkNw23lO-NSntNuRr4O3T7VIk-eVrW6dSvs3pRklBvjydfklRBXEnBCbkdAflr9WF6cZZuYGRL8.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">1610: <span class="text-muted">the First Telescopic Observation</span></h2>
              <p class="lead">Italian astronomer Galileo Galilei made the first telescopic observation of the moon. In the same year, Thomas Harriot and Galileo Galilei drew the first telescopic representation of the moon.</p>
            </div>
            <div class="col-md-5" style="top: 30px;" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/-galileo-galilei-1564---1642-using-a-telescope-circa-1620-photo-by-hulton-archivegetty-images.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="top: 70px;">
              <h2 class="featurette-heading">1645: <span class="text-muted">the First Map</span></h2>
              <p class="lead">Michael Florent van Langren made the first map of the moon.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 20px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/van-langren_lumina-austriaca-philippica_curiokids.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="top: 50px;">
              <h2 class="featurette-heading">1840: <span class="text-muted">the First "Photo"</span></h2>
              <p class="lead">John W. Draper takes a daguerreotype of the Moon, the first astronomical photograph.</p>
            </div>
            <div class="col-md-5" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/John_W_Draper-The_first_Moon_Photograph_1840.jpg" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="top: 50px;">
              <h2 class="featurette-heading">1920: <span class="text-muted">A Man and His Rocket</span></h2>
              <p class="lead">Robert Goddard suggested sending rockets to the moon.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/5a5JpmX4ebYVSB77eoxXt4.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">4 March, 1959: <span class="text-muted">Near Miss</span></h2>
              <p class="lead">The United States' Pioneer 4 spacecraft aims to fly by and photograph the Moon. The second stage rockets fail to cut off on time, and the spacecraft passes by the Moon too far away for the imaging scanner to function. However, Pioneer 4 becomes the first American craft to leave Earth orbit, and scientists collect useful data on radiation in space.</p>
            </div>
            <div class="col-md-5" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/missionswebpioneer.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 20px;">
              <h2 class="featurette-heading">13 September, 1959: <span class="text-muted">First Contact</span></h2>
              <p class="lead">Soviet spacecraft Luna 2 reached the moon, impacting near the crater Autolycus.  It was the first spacecraft to reach the surface of the Moon and the first human-made object to make contact with another celestial body.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/surveyor-3__1.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">July 31, 1964: <span class="text-muted">Success at Last</span></h2>
              <p class="lead">Ranger 7 is the first unequivocal success in U.S. efforts to explore the Moon, after 13 consecutive failed missions. Just 15 minutes prior to intentionally impacting the Moon's surface, Ranger 7's suite of TV cameras begins sending back spectacular photos of the approaching surface.</p>
            </div>
            <div class="col-md-5" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/3632.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="top: 50px;">
              <h2 class="featurette-heading">December 29, 1968: <span class="text-muted">Earthrise</span></h2>
              <p class="lead">Apollo 8 is the first mission to take humans to the Moon. After swinging around the far side, the astronauts are greeted with a sight never seen before by human eyes: the home world appearing to rise over the lunar horizon.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/Apollo_8_Crewmembers_-_GPN-2000-001125.jpg" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">July 20, 1969: <span class="text-muted">"The Eagle Has Landed"</span></h2>
              <p class="lead">Apollo 11 astronauts Neil Armstrong and Buzz Aldrin become the first people to walk on the surface of the Moon after their lunar excursion module Eagle touches down on Mare Tranquillitatis.</p>
            </div>
            <div class="col-md-5" style="top: 15px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/1532598949_Nasa_Apollo11_Header.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 30px;">
              <h2 class="featurette-heading">April 13, 1970: <span class="text-muted">"Houston, we've had a problem here."</span></h2>
              <p class="lead">The Apollo 13 crew is supposed to land in the Moon's Fra Mauro area. Instead, an explosion on board the command module forces the mission to circle the moon without landing. The mission is considered a "successful failure" because of the experience gained in rescuing the crew.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top: 100px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/1869600_041317-me-hanson-apollo-13-vid.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset" style="bottom: 40px;">
              <h2 class="featurette-heading">December 11, 1972: <span class="text-muted">Last Men on the Moon</span></h2>
              <p class="lead">Eugene Cernan and Harrison H. Schmitt are the last people to walk on the Moon, so far. The objectives of the Apollo 17 mission include surveying and sampling surface features in the Taurus-Littrow region, and testing new equipment such as the lunar rover.</p>
            </div>
            <div class="col-md-5" style="top: 100px;">
              <img class="featurette-image img-fluid mx-auto" src="images/moon/the-last-man-on-the-moon.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset" style="bottom: 20px;">
              <h2 class="featurette-heading">February 19, 1994: <span class="text-muted">Return of the Robots: Clementine</span></h2>
              <p class="lead">Clementine is the first U.S. spacecraft launched to the Moon in over 20 years. It is designed to demonstrate a set of lightweight technologies, such as small imaging sensors. Clementine carries 15 advanced flight-test components and 10 science instruments to document locations that included the Moon's enormous south pole-Aitken impact basin.</p>
            </div>
            <div class="col-md-5 order-md-1" >
              <img class="featurette-image img-fluid mx-auto" src="images/moon/Clementine_lunar.png" alt="Generic placeholder image">
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