
<!-- Tooltip -->
			// $(document).ready(function(){
				// $('.poshytip').poshytip({
					// className: 'tip-twitter',
					// showTimeout: 1,
					// alignTo: 'target',
					// alignX: 'center',
					// alignY:'bottom',
					// offsetY: 5,
					// allowTipHover: true,
				// });
				// });

<!-- Responsive Menu -->
			$(document).ready(function(){		
				jQuery("#responsive-menu select").change(function() {
					window.location = jQuery(this).find("option:selected").val();
				});
				});
				
<!-- Smooth Scroll -->
$(document).ready(function(){
  // Add smooth scrolling to all links
  $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1000, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
});
<!-- Hook up the FlexSlider -->
            $(window).load(function(){
			$('.flexslider').flexslider({
            animation: "slide",              //String: Select your animation type, "fade" or "slide"
			slideDirection: "horizontal",   //String: Select the sliding direction, "horizontal" or "vertical"
			slideshow: false,                //Boolean: Animate slider automatically
			slideshowSpeed: 4000,           //Integer: Set the speed of the slideshow cycling, in milliseconds
			animationDuration: 8000,         //Integer: Set the speed of animations, in milliseconds
			directionNav: true,             //Boolean: Create navigation for previous/next navigation? (true/false)
			controlNav: true,               //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
			keyboardNav: true,              //Boolean: Allow slider navigating via keyboard left/right keys
			mousewheel: false,              //Boolean: Allow slider navigating via mousewheel
			prevText: "Previous",           //String: Set the text for the "previous" directionNav item
			nextText: "Next",               //String: Set the text for the "next" directionNav item
			pausePlay: false,               //Boolean: Create pause/play dynamic element
			randomize: false,               //Boolean: Randomize slide order
			slideToStart: 0,                //Integer: The slide that the slider should start on. Array notation (0 = first slide)
			animationLoop: true,            //Boolean: Should the animation loop? If false, directionNav will received "disable" classes at either end
			pauseOnAction: true,            //Boolean: Pause the slideshow when interacting with control elements, highly recommended.
			pauseOnHover: false,            //Boolean: Pause the slideshow when hovering over slider, then resume when no longer hovering
			start: function(){},            //Callback: function(slider) - Fires when the slider loads the first slide
			before: function(){},           //Callback: function(slider) - Fires asynchronously with each slider animation
			after: function(){},            //Callback: function(slider) - Fires after each slider animation completes
			end: function(){},               //Callback: function(slider) - Fires when the slider reaches the last slide (asynchronous)
			smoothHeight: true,
			touch: true,
			
	  
	  });
	  
	  // jQuery(document).ready(function ()
// { 

  // // Vimeo API nonsense
  // var player = document.getElementById('player_1');
  // $f(player).addEvent('ready', ready);
 
  // function addEvent(element, eventName, callback) {
    // if (element.addEventListener) {
      // element.addEventListener(eventName, callback, false)
    // } else {
      // element.attachEvent(eventName, callback, false);
    // }
  // }
 
  // function ready(player_id) {
    // var froogaloop = $f(player_id);
    // froogaloop.addEvent('play', function(data) {
      // $('.flexslider').flexslider("pause");
    // });
    // froogaloop.addEvent('pause', function(data) {
      // $('.flexslider').flexslider("play");
    // });
  // }
 
 
  // // Call fitVid before FlexSlider initializes, so the proper initial height can be retrieved.
  // $(".flexslider")
    // .fitVids()
    // .flexslider({
      // animation: "slide",
	  // slideshow: false,      
      // useCSS: false,
      // animationLoop: false,
      // smoothHeight: true,
      // before: function(slider){
        // $f(player).api('pause');
      // }
	// });
	
// });
	var vimeoPlayers = jQuery('.flexslider').find('iframe'), player;

for (var i = 0, length = vimeoPlayers.length; i < length; i++) {
        player = vimeoPlayers[i];
        $f(player).addEvent('ready', ready);
}

function addEvent(element, eventName, callback) {
    if (element.addEventListener) {
        element.addEventListener(eventName, callback, false)
    } else {
        element.attachEvent(eventName, callback, false);
    }
}

function ready(player_id) {
    var froogaloop = $f(player_id);
    froogaloop.addEvent('play', function(data) {
     jQuery('.flexslider').flexslider("pause");
    });

    froogaloop.addEvent('pause', function(data) {
        jQuery('.flexslider').flexslider("play");
    });
}

jQuery(".flexslider")

.flexslider({
    animation: "slide",
    animationLoop: true,
    smoothHeight: true,
	
    slideshow: false,
    useCSS: false,
    before: function(slider){
        if (slider.slides.eq(slider.currentSlide).find('iframe').length !== 0)
           $f( slider.slides.eq(slider.currentSlide).find('iframe').attr('id') ).api('pause');
           /* ------------------  YOUTUBE FOR AUTOSLIDER ------------------ */
           playVideoAndPauseOthers($('.play3 iframe')[0]);
    }


});

function playVideoAndPauseOthers(frame) {
$('iframe').each(function(i) {
var func = this === frame ? 'playVideo' : 'stopVideo';
this.contentWindow.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
});
}

/* ------------------ PREV & NEXT BUTTON FOR FLEXSLIDER (YOUTUBE) ------------------ */
$('.flex-next, .flex-prev').click(function() {
playVideoAndPauseOthers($('.play3 iframe')[0]);
});
  });
    // });

		

				
// Activate the contactform
			  $(document).ready(function(){
			$(function(){
				$('#contact_form').submit(function(e){
					e.preventDefault();
					var form = $(this);
					var post_url = form.attr('action');
					var post_data = form.serialize();
					$('#loader', form).html('<img src="images/loader.gif" /> Please Wait...');
					$.ajax({
						type: 'POST',
						url: post_url, 
						data: post_data,
						success: function(msg) {
							$(form).fadeOut(500, function(){
								form.html(msg).fadeIn();
							});
						}
					});
				});
			});
			 });
// Activate the prettyPhoto
			   $(document).ready(function(){
				  $("a[class^='prettyPhoto']").prettyPhoto();
				});
				
// Activate the MainMenu

			  $(document).ready(function(){ 
				  $("ul.sf-menu").superfish(); 
			  });
//##########################################
	// Toggle box
	//##########################################
	  $(document).ready(function(){ 
	$('.toggle-trigger').click(function() {
		$(this).next().toggle('slow');
		$(this).toggleClass("active");
		return false;
	}).next().hide(); 
		});
		



  
	

