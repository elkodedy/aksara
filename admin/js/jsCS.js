function blueActive(x) {
	// body...
	for(var i = 0; i<=11; i++){
		if (i==x)
			document.querySelectorAll('.navbar-sidebar .navbar__list li a').style.color = "#4272d7";
		else
			document.getElementsByClassName('.navbar-sidebar .navbar__list li a').style.color = "#555";

	}
}


	function mOver(obj) {
		if(obj=='home'){
	    	document.getElementsByClassName('navMarker')[0].id = "navMarker";
	    	document.getElementsByClassName('navMarker')[1].id = "";
		    document.getElementsByClassName('navMarker')[2].id = "";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='fasilitas'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
	    	document.getElementsByClassName('navMarker')[1].id = "navMarker";
		    document.getElementsByClassName('navMarker')[2].id = "";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='testimoni'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
		    document.getElementsByClassName('navMarker')[1].id = "";
	    	document.getElementsByClassName('navMarker')[2].id = "navMarker";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='visimisi'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
		    document.getElementsByClassName('navMarker')[1].id = "";
	    	document.getElementsByClassName('navMarker')[2].id = "";
	    	document.getElementsByClassName('navMarker')[3].id = "navMarker";
		}
	}

	function navClick(obj) {
		if(obj=='home'){
	    	document.getElementsByClassName('navMarker')[0].id = "navMarker";
	    	document.getElementsByClassName('navMarker')[1].id = "";
		    document.getElementsByClassName('navMarker')[2].id = "";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='fasilitas'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
	    	document.getElementsByClassName('navMarker')[1].id = "navMarker";
		    document.getElementsByClassName('navMarker')[2].id = "";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='testimoni'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
		    document.getElementsByClassName('navMarker')[1].id = "";
	    	document.getElementsByClassName('navMarker')[2].id = "navMarker";
		    document.getElementsByClassName('navMarker')[3].id = "";
		}
		if(obj=='visimisi'){
	    	document.getElementsByClassName('navMarker')[0].id = "";
		    document.getElementsByClassName('navMarker')[1].id = "";
	    	document.getElementsByClassName('navMarker')[2].id = "";
	    	document.getElementsByClassName('navMarker')[3].id = "navMarker";
		}
	}

	// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });