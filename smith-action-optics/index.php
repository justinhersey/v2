<?php $thisPage="Smith Action Optics"; ?>
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
		<h1>Smith Action Optics</h1>
		<p><strong>Project:</strong> Polarized Collection Brochure<br />
		<strong>Role:</strong> Designer</p>
		<div class="floating down-arrow"><span></span></div>
	</div>
	
	<section class="project">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/smith1.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/smith2.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/smith3.jpg" alt="Airstream" />
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