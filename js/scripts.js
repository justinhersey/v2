function getViewportDimensions() {
	var $window = $(window),
		width = $window.width(),
		height = $window.height();
	return {
		'width' : width,
		'height' : height
	}
}

function resizeCover(elem) {
	var viewportWidthHeight = getViewportDimensions(),
		viewportWidth = viewportWidthHeight.width,
		viewportHeight = viewportWidthHeight.height;
	
	$(elem).css({
		'height'	:		viewportHeight
	});
}

function navToggle() {
	$( "#nav-toggle" ).on( "touchstart click", function(e) {
		var nav = $('nav'),
			navToggle = $('#nav-toggle'),
			navList = $('.nav-list'),
			navListItem = navList.find('li');
		if (!navList.is(':animated')) {
			nav.add(navToggle).toggleClass('active');
			navList.toggleClass('hide'),
			animateClasses = ('animated fadeInLeft');
			if (!navList.hasClass('hide')) {
				navListItem.each(function(i) {
					var $this = $(this);
					setTimeout(function() {
						$this.addClass(animateClasses);
					}, 300*i);
				});
			} else {
				navListItem.removeClass(animateClasses);
			}
		}
		e.preventDefault();
	});
}

function nav() {
	// Hide Header on scroll down
	var didScroll,
		lastScrollTop = 0,
		delta = 5,
		nav = $('nav'),
		navbarHeight = nav.outerHeight();
	window.onscroll = function (event) {
	    didScroll = true;
	}
	
	setInterval(function() {
	    if (didScroll) {
	        hasScrolled();
	        didScroll = false;
	    }
	}, 250);
	
	function hasScrolled() {
	    var st = $(this).scrollTop();
	    
	    // Make sure they scroll more than delta
	    if(Math.abs(lastScrollTop - st) <= delta)
	        return;
	    
	    // If they scrolled down and are past the navbar, add class .nav-up.
	    // This is necessary so you never see what is "behind" the navbar.
	    if (st > lastScrollTop && st > navbarHeight){
	        // Scroll Down
	        nav.removeClass('nav-down').addClass('nav-up');
	    } else {
	        // Scroll Up
	        if(st + $(window).height() < $(document).height()) {
	            nav.removeClass('nav-up').addClass('nav-down');
	        }
	    }
	    
	    lastScrollTop = st;
	}
}