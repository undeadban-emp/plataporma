
$( document ).ready(function() {
	$('.m-nav a .fa-times').hide();

	$('.carousel').carousel({
  		interval: 5000
	});

	$('html').on('click', function() {
	   // $('.subnav').hide(); 
	});

	$('.nav').on('click', function(event){
	     event.stopPropagation();
	});
	
	$('.sublevel').on('click', function(event){
	     $('#kumilos-nav2').toggle();
	     $('#kilalanin').hide();
	});

	$('.sublevel2').on('click', function(event){
	     $('#kumilos-nav2').hide();
	     $('#kilalanin').toggle();
	});

	$('.m-nav a').on('click', function(){
		$('.m-nav a .fa-times').toggle();
		$('.m-nav a .fa-bars').toggle();
		$('.nav').toggle();
	});

	$('.showcall').on('click', function(){
		$('#calltext').fadeIn();
	});

	$('.showdonate').on('click', function(){
		$('#donate-now').fadeIn();
	});

	$('.phone-holder .close-btn').on('click', function(){
		$('#calltext').fadeOut();
		$('#donate-now').fadeOut();

		var swidth = window.screen.availWidth;
		if (swidth < 767){
			hideAll();
		}
	});

	function hideAll(){		
	    $('#kumilos-nav2').fadeOut();
	    $('#kilalanin').fadeOut();
		$('.nav').fadeOut();
	}

	$(".nav a[href^='#']").on('click', function(e) {

	   // prevent default anchor click behavior
	   e.preventDefault();

	   // store hash
	   var hash = this.hash;

	   // animate
	   $('html, body').animate({
	       scrollTop: $(hash).offset().top
	     }, 300, function(){

	       // when done, add hash to url
	       // (default click behaviour)
	       window.location.hash = hash;
	     });

	});

	window.onscroll = function() {scrollFunction()};

	$('#myBtn').on('click', function(e){
		topFunction();
	});

	function scrollFunction() {
	    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
	        document.getElementById("myBtn").style.display = "block";
	    } else {
	        document.getElementById("myBtn").style.display = "none";
	    }
	}

	// When the user clicks on the button, scroll to the top of the document
	function topFunction() {
	    document.body.scrollTop = 0;
	    document.documentElement.scrollTop = 0;
	}

});
