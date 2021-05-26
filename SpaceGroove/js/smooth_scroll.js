$(document).ready(function(){
    // Add smooth scrolling to all links
    $("a").on('click', function(event) {
      if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();
            var hash = this.hash; // Store hash
            // Using jQuery's animate() method to add smooth page scroll
            $('html, body').animate(
              { scrollTop: $(hash).offset().top }, 
              800, // The optional number specifies the number of milliseconds it takes to scroll to the specified area
              function(){
                  // Add hash (#) to URL when done scrolling (default click behavior)
                  window.location.hash = hash;
                }
          );
      }
    });
});