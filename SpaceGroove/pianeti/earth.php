<!DOCTYPE html>
<html lang="en">
<head>
    <title>Earth</title>
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
      <h2 id="text">Earth</h2>
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
              <h2 class="featurette-heading">Earth, <span class="text-muted">our Home!</span></h2><br>
              <p class="lead">Earth is the only place we know of so far that’s inhabited by living things. <br><br> It's also the only planet in our solar system with liquid water on the surface. 
                A distinctive blue and green image of Earth reveals our planet's most remarkable features.
              <br><br>At 4.54 billion years old, our home world is a venerable object. But it was only with the arrival of the space age in the late 1950s that Earth was seen from a cosmic perspective.</p>
            </div>
            <div class="col-md-5">
              <img class="featurette-image img-fluid mx-auto" src="images/earth/purepng.com-earthearthplanetglobethird-planet-from-the-sun-1411526987924uaycc.png" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider" style="margin: 5rem -1rem -2rem -1rem">
  
          <div class="row featurette">
            <div  data-sr="enter top over 1s, wait 0.3s, move 24px, reset">
              <h2 class="featurette-heading">Overview:</h2><br>
              <p class="lead">While Earth is only the fifth largest planet in the solar system, it is the only world in our solar system with liquid water on the surface. Just slightly larger than nearby Venus, Earth is the biggest of the four planets closest to the Sun, all of which are made of rock and metal.
                <br><br>The name Earth is at least 1,000 years old. All of the planets, except for Earth, were named after Greek and Roman gods and goddesses. However, the name Earth is a Germanic word, which simply means “the ground.”<br><br></p>
            </div>
            <div  style="padding-left: 70px;">
              <img class="featurette-image img-fluid mx-auto" src="images/earth/rotazione_terra.png" width="1000px" alt="Generic placeholder image">
            </div>
          </div>
  
          <hr class="featurette-divider" style="margin: 5rem -1rem -3rem -1rem">

          <h3 class="featurette-heading">Earth Galleries:</h3><br>

          <div class="row featurette">
            <div class="col-md-7" data-sr="enter left over 1s, wait 0.3s, move 24px, reset">
                <button name="doc" class="aa" id="btn">Milky Way Galaxy</button><br/>
                <button name="doc" class="aa" id="btn">Blue Moon</button><br/>
                <button name="doc" class="aa" id="btn">View from Apollo 11</button><br/>
                <button name="doc" class="aa" id="btn">From 114 Million Miles</button><br/>
            </div>
            <div class="col-md-3" data-sr="enter right over 1s, wait 0.3s, move 24px, reset">
                <button name="doc" class="bb" id="btn">Sun Eclipse</button><br/>
                <button name="doc" class="bb" id="btn">Dance of the Plankton</button><br/>
                <button name="doc" class="bb" id="btn">Kamchatka Peninsula</button><br/>
                <button name="doc" class="bb" id="btn">Meteor Crater</button><br/>
            </div>
          </div>

          <div class="row featurette">
            <div class="col-md-5">
              <div id="zona_aa"></div>
            </div>
            <div class="col-md-7">
              <div id="zona_bb"></div>
            </div>
          </div>
          
          <hr class="featurette-divider" style="margin: 5rem -1rem -2rem -1rem">

          <div class="dinamic">
            <div class="form-group">
                <h3 class="featurette-heading">If you wanna see a live image of Europe by satellite, click 
                <button name="res" id="btn" class="small">HERE</button>
                </h3>
            </div>
            <div id="zonaDinamica"></div>
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

  <!-- AJAX -->
 <script>
    var documenti = document.getElementsByName("doc");
    for (var i = 0; i < documenti.length; i++) {
      documenti[i].onclick = caricaDocumento1;
    }
    function caricaDocumento1(e) {
      var httpRequest = new XMLHttpRequest();
      httpRequest.prevTarget = e.target;
      httpRequest.onreadystatechange = gestisciResponse1;
      httpRequest.open("GET", e.target.innerHTML + ".htm", true);
      httpRequest.send();
    }
    function gestisciResponse1(e) {
      if (e.target.readyState == 4 && e.target.status == 200) {
        document.getElementById("zona_"+e.target.prevTarget.getAttribute("class")).innerHTML = e.target.responseText;
      }
    }
  </script> 

<script>
  var documenti = document.getElementsByName("res");
  for (var i = 0; i < documenti.length; i++) {
    documenti[i].onclick = caricaDocumento;
  }
  function caricaDocumento(e) {
    var httpRequest = new XMLHttpRequest();
    httpRequest.onreadystatechange = gestisciResponse;
    httpRequest.open("GET", e.target.innerHTML + ".htm", true);
    httpRequest.send();
  }
  function gestisciResponse(e) {
    if (e.target.readyState == XMLHttpRequest.DONE &&
    e.target.status == 200) {
      document.getElementById("zonaDinamica").innerHTML = e.target.responseText;
    }
  }
</script>
    
</body>
</html>