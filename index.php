<!doctype html>
<html lang="en">
  <head>
    <!-- BASIC META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Wesley Dog</title>
		<meta name='keywords' content='wesley, dog, bone'>
		<meta name='description' content='My name is Wesley. I am a dog and like long walks. I prefer eating chicken.'>
		
		
		<!--	FAVICON META	-->
		<link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
		<link rel="manifest" href="site.webmanifest">
		<link rel="mask-icon" href="safari-pinned-tab.svg" color="#f15a24">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="theme-color" content="#000000">
		
		
		<!--	SOCIAL META	-->
		<meta property="og:image:width" content="1852">
		<meta property="og:image:height" content="970">
		<meta property="og:description" content="Wesley is a labradoodle that loves walks and chicken.">
		<meta property="og:title" content="Wesley | A Highland Dog">
		<meta property="og:url" content="http://wesley.dog">
		<meta property="og:image" content="http://www.wesley.dog/assets/og-image.jpg">
		
		<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/brands.css" integrity="sha384-SYNjKRRe+vDW0KSn/LrkhG++hqCLJg9ev1jIh8CHKuEA132pgAz+WofmKAhPpTR7" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/fontawesome.css" integrity="sha384-0b7ERybvrT5RZyD80ojw6KNKz6nIAlgOKXIcJ0CV7A6Iia8yt2y1bBfLBOwoc9fQ" crossorigin="anonymous">
		
		<!-- Metafizzy | Flickity -->
		<link rel="stylesheet" href="css/flickity.min.css" media="screen">
		<!--my css-->
		<link rel="stylesheet" href="css/stylesheet.css">
		
  </head>
  <body>
		
		<div class="header-target">
			<div class="header">
				<a class="insta"
					 href="https://www.instagram.com/wesley.d0g/"
					 target="noopener">
					<!--https://fontawesome.com/license-->
					<i class="fab fa-instagram fa-2x insta" alt="Instagram logo"></i>
				</a>
			</div>
		</div>
		
		
		
		<div class="main-carousel" 
				 data-flickity='{ "cellAlign": "center", "wrapAround": true, "contain": true, "autoPlay": 3500, "pauseAutoPlayOnHover": false, "pageDots": false, "prevNextButtons": false, "lazyLoad": 2 }'>
			<?php
			
				for ($i = 1; $i <=23; $i++) { ?>
					
					<div class="carousel-cell w <?php echo $i; ?>">
						
						<picture>
							<source media="(max-width: 775px)" srcset="assets/slider/sm-1200-1x/wes-sm-<?php echo $i; ?>.jpg">
							
							<!-- src is the lower quality img -->
							<img class="carousel-cell-image"
								 alt="Photograph of Wesley the dog."
								 src="assets/slider/lg-lazy/wes-lazy-<?php echo $i; ?>.jpg"
								 data-flickity-lazyload="assets/slider/lg-1920-1x/wes-large-1x-<?php echo $i; ?>.jpg">
						</picture>
					</div>
			<?php
				}
			?>
		</div>
		
		
		<div class="footer-target">
			<div class="footer">
				<img class="logo" alt="wesley.dog logo" src="assets/brand/wes-logo.svg">
			</div>
		</div>
		
		
		<!-- Google Analytics -->
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-89699287-2"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());

			gtag('config', 'UA-89699287-2');
		</script>
		
		<!-- Metafizzy | Flickity -->
		<script src="js/flickity.pkgd.min.js"></script>

		<!-- lazysizes.min.js -->
		<script src="js/lazysizes.min.js"></script>

		<!--my js-->
		<script src="js/main.js" type="text/javascript"></script>
  </body>
</html>