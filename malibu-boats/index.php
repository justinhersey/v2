<?php $thisPage="Malibu Boats"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
	<?php include("../includes/fonts.php"); ?>
    <script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
</head>
<body>

	<?php include("../includes/nav.php"); ?>
	
	<div class="project-description-panel">
		<h1>Malibu Boats</h1>
		<p><strong>Project:</strong> Malibu Boats Brochure<br />
		<strong>Role:</strong> Art Director / Designer</p>
		<div class="floating down-arrow"><span></span></div>
	</div>
	
	<section class="project">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu1.jpg" alt="Malibu Boats" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu2.jpg" alt="Malibu Boats" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibu3.jpg" alt="Malibu Boats" />
	</section>
	<section class="project">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibuad1.jpg" alt="Malibu Boats" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/malibuad2.jpg" alt="Malibu Boats" />
	</section>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			//nav();
			resizeCover('.project-description-panel');
			// Listen for orientation changes
			window.addEventListener("orientationchange", function() {
				resizeCover('.project-description-panel');
			}, false);
			$('.project-description-panel').find('.down-arrow').on('touchstart click', function(e) {
				$('html, body').animate({
    				scrollTop: $('.project-description-panel').next().offset().top
				}, 500);
				e.preventDefault();
			});
			$( "#nav-toggle" ).on( "touchstart click", function(e) {
				var navList = $('.nav-list');
				if (!navList.is(':animated')) {
					$( this ).toggleClass( "active" );
					navList.slideToggle();
				}
				e.preventDefault();
			});
		});
	</script>
</body>
</html>