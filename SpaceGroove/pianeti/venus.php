<!DOCTYPE html>
<html lang="en">
<head>
    <title>Venus</title>
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
      <h2 id="text">Venus</h2>
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
              <h2 class="featurette-heading">Venus <span class="text-muted">is the hottest planet in our solar system.</span></h2>
              <p class="lead">This hostile world is covered in thousands of volcanoes and is encased in a dense layer of toxic clouds, swept along by constant hurricane-force winds.</p>
            </div>
            <div class="col-md-5 " style="top:50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/Hot-venus.jpg" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">650 BC: <span class="text-muted">Ancient Observers</span></h2>
              <p class="lead">Mayan astronomers make detailed observations of Venus, leading to a highly accurate calendar.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/calendario-maya-2.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1610: <span class="text-muted">Phases of Venus</span></h2>
              <p class="lead">Galileo Galilei documents the phases of Venus in The Starry Messenger.</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/2337_1011_1057-050_944.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1761-1769: <span class="text-muted">Expeditions</span></h2>
              <p class="lead">Two European expeditions to watch Venus cross in front of the sun lead to the first good estimate of the sun's distance from Earth.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/J_MzvqaEHf8uZG2muFNPGFZilbrVzbzTiyhNtABXorSsaG9RIqEewQRjaZNCDxdKZNSndRrycLYzHzmnMkWURDWdowtkZ7acRxW3.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1961: <span class="text-muted">First Radar</span></h2>
              <p class="lead">Radar returns from Venus are used to determine the most accurate value (at the time) for the sun’s distance from Earth. (Published in 1962.)</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/1TDLkrXrZWAHTGQUHG9yFYQ.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">December 14, 1962: <span class="text-muted">First Flyby</span></h2>
              <p class="lead">NASA's Mariner 2 reaches Venus and reveals the planet's extreme surface temperatures. It is the first spacecraft to send back information from another planet.</p>
            </div>
            <div class="col-md-5 order-md-1">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/714073main_mariner_2_full_full.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">1970-1983: <span class="text-muted">First Landing</span></h2>
              <p class="lead">The Soviet Union's Venera series of robotic spacecraft make several successful landings on the surface of Venus—sending back the first data from the surface of another planet the only pictures of the Venusian surface to date.</p>
            </div>
            <div class="col-md-5 " style="top:50px;">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/venussurface-1280x720.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider">
  
          <div class="row featurette">
            <div class="col-md-7 order-md-2" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2005-2014: <span class="text-muted">Detailed Study</span></h2>
              <p class="lead">The European Space Agency launches Venus Express to study the atmosphere and surface. The orbiter reached Venus in April 2006, and studied the planet through 2014.</p>
            </div>
            <div class="col-md-5 order-md-1" style="top:30px;">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/B8WfkaJZWrsms27RGsTu63.png" alt="Generic placeholder image">
            </div>
          </div>

          <hr class="featurette-divider">
          
          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">2015: <span class="text-muted">Return to Venus</span></h2>
              <p class="lead">After launching in 2010, Japan's Akatsuki ("Dawn") orbiter achieves orbit around Venus. This is Japan’s first mission to explore Venus.</p>
            </div>
            <div class="col-md-5 ">
              <img class="featurette-image img-fluid mx-auto" src="images/venus/HyUh4gTDbJKNje53JEQDWT.png" alt="Generic placeholder image">
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

  <!-- SERVE ???
  
    <script src="js/jquery-3.2.1.slim.min.js"></script>

  -->

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