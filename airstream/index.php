<?php $thisPage="Airstream"; ?>
<?php include("../includes/header.php"); ?>

	<?php include("../includes/nav.php"); ?>
	
	<div class="project-description-panel">
		<h1>Airstream</h1>
		<p><strong>Project:</strong> Basecamp Brochure<br />
		<strong>Role:</strong> Designer</p>
		<div class="floating down-arrow"><span></span></div>
	</div>
	
	<section class="project airstream">
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream1.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream2.jpg" alt="Airstream" />
		<img class="project-image" src="http://herseydesigns.com/images/bg_images/airstream3.jpg" alt="Airstream" />
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