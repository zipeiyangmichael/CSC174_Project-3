$(window).load(function(){
	// Activate the carousel
  	$('.carousel').carousel();
  	// Change slides every 5 seconds
  	var intervalID = setInterval(function() {
		$('.carousel').carousel('next');
	}, 5000);
});

//Display carousel across the length of the screen
$('.carousel.carousel-slider').carousel({full_width: true});


