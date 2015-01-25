<?php $thisPage="Marvin Road Mini Storage"; ?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="../css/stylesheet.css" rel="stylesheet" type="text/css">
	<?php include("../includes/fonts.php"); ?>
	<script>document.cookie='resolution='+Math.max(screen.width,screen.height)+'; path=/';</script>
</head>
<body>

	<?php include("../includes/nav.php"); ?>
	
	<div class="project-description-panel">
		<h1>Marvin Road Mini Storage</h1>
		<p><strong>Project:</strong> Logo<br />
		<strong>Role:</strong> Designer</p>
		<div class="floating down-arrow"><span></span></div>
	</div>
	
	<section class="project airstream">
		<img class="project-image" src="../images/mrms-logo.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/mrms1.jpg" alt="Airstream" />
	</section>
	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript" src="../js/scripts.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			resizeCover('.project-description-panel');
			// Listen for orientation changes
			window.addEventListener("orientationchange", function() {
				resizeCover('.project-description-panel');
			}, false);
			navToggle();
			$('.project-description-panel').find('.down-arrow').on('touchstart click', function(e) {
				$('html, body').animate({
    				scrollTop: $('.project-description-panel').next().offset().top
				}, 500);
				e.preventDefault();
			});
		});
	</script>
</body>
</html>