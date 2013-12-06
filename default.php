<!Doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Home</title>
		<link rel="stylesheet" type="text/css" href="css/default.css">
		<link href='http://fonts.googleapis.com/css?family=Amarante' rel='stylesheet' type='text/css'>


		<link rel="stylesheet" type="text/css" href="js/vendor/default/default.css?v=2">
        <link rel="stylesheet" type="text/css" href="js/vendor/nivo-slider.css?v=2">
	</head>

	<body>
		<header>
			<?php include 'includes/social.php';?>
			<?php include 'includes/logos.php';?>
			<p id="titulo">
				<span id="subT"><strong>Grupo Scout No. 3 RNL</strong></span>
			</p>
			
		</header>

		<?php include 'includes/nav.php';?>

		<br/>

		<?php require_once('includes/gallery.php'); ?>

		<br/>
		
		<div id="contenedor">

			<section>

				<article>
					<header>
						<h2>Lorem ipsum dolor sit amet,</h2>
					</header>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>

				<article>
					<header>
						<h2>Lorem ipsum dolor sit amet,</h2>
					</header>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</article>

		</section>

		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		<script defer src="js/vendor/jquery.nivo.slider.js"></script>
		<script type="text/javascript">
			$(window).load(function() {
			    $('#slider').nivoSlider({
			    	slices: 2.5,
			    	controlNav:false
			    	
			        /*effect: 'boxRain', // Specify sets like: 'fold,fade,sliceDown'
			        slices: 1, // For slice animations
			        boxCols: 8, // For box animations
			        boxRows: 4, // For box animations
			        animSpeed: 500, // Slide transition speed
			        pauseTime: 3000, // How long each slide will show
			        startSlide: 0, // Set starting Slide (0 index)
			        directionNav: true, // Next & Prev navigation
			        controlNav: true, // 1,2,3... navigation
			        controlNavThumbs: false, // Use thumbnails for Control Nav
			        pauseOnHover: true, // Stop animation while hovering
			        manualAdvance: false, // Force manual transitions
			        prevText: 'Prev', // Prev directionNav text
			        nextText: 'Next', // Next directionNav text
			        randomStart: false, // Start on a random slide
			        beforeChange: function(){}, // Triggers before a slide transition
			        afterChange: function(){}, // Triggers after a slide transition
			        slideshowEnd: function(){}, // Triggers after all slides have been shown
			        lastSlide: function(){}, // Triggers when last slide is shown
			        afterLoad: function(){} // Triggers when slider has loaded*/
			    });
			});
		</script>

	</body>
</html>
