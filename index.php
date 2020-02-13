<!doctype html>
<html lang="en">
  <head>
    <!-- BASIC META -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Wesley Dog | A Highland Dog</title>
		<meta name='keywords' content='wesley, dog, photopraphy, portfolio, cute'>
		<meta name='description' content='My name is Wesley. I am a dog and love long walks. Not sure if I prefer eating chicken though.'>


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
		<meta property="og:description" content="My name is Wesley. I am a dog and love long walks. Not sure if I prefer eating chicken though.">
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
					<svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><title>Instagram Logo</title><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
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
                <div class="logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="160" height="auto" viewBox="0 0 142.81 86"><defs><style>.a{fill:#933624;}.b{fill:#f15a24;}.c{fill:#ce2020;}.d{fill:#3c2415;}</style></defs><title>Wesley Logo</title><path class="a" d="M147.76,70.11a1.32,1.32,0,1,1,0,2.64,1.32,1.32,0,0,1,0-2.64Z" transform="translate(-29.6 -6)"/><path class="a" d="M151.1,72.67a.56.56,0,0,1-.61-.61V60.65a.55.55,0,0,1,.61-.6h2.47c2.25,0,3.26.91,3.26,2.77v7.06c0,1.88-1,2.79-3.26,2.79ZM153.57,71a1,1,0,0,0,1.07-1.08V62.82a1,1,0,0,0-1.07-1.06h-.87V71Z" transform="translate(-29.6 -6)"/><path class="a" d="M164.62,62.67v7.38c0,1.82-1,2.7-3.21,2.7s-3.19-.88-3.19-2.7V62.67c0-1.81,1-2.7,3.19-2.7S164.62,60.86,164.62,62.67Zm-4.18,0v7.38a.87.87,0,0,0,1,1,.89.89,0,0,0,1-1V62.67a.89.89,0,0,0-1-1A.87.87,0,0,0,160.44,62.67Z" transform="translate(-29.6 -6)"/><path class="a" d="M171.79,66.06a.55.55,0,0,1,.61.6v3.39c0,1.82-1,2.7-3.2,2.7s-3.19-.88-3.19-2.7V62.67c0-1.81,1-2.7,3.19-2.7s3.2.89,3.2,2.7v1.15a.56.56,0,0,1-.61.61h-1a.56.56,0,0,1-.61-.61V62.67a.89.89,0,0,0-1-1,.88.88,0,0,0-1,1v7.38a.87.87,0,0,0,1,1,.89.89,0,0,0,1-1V67.77h-.42a.54.54,0,0,1-.59-.61v-.5a.54.54,0,0,1,.59-.6Z" transform="translate(-29.6 -6)"/><path class="b" d="M30.07,52a1.63,1.63,0,0,0,.13,2.41,3.23,3.23,0,0,0,3.4.44c2.54-.92,4.85-2.87,6.9-4.58s4.08-3.67,6.11-5.51c1-1,2.11-1.88,3.21-2.77s2.64-1.77,3-3.3a2,2,0,0,0-1.93-2.53c-2.15-.05-4.1,2.34-5.51,3.76-1.6,1.62-3.12,3.31-4.68,5a61.32,61.32,0,0,1-4.68,4.58,32,32,0,0,1-2.62,2c-.36.25-1.07.93-1.52.94s-.63-.35-.91-.55a.8.8,0,0,0-.95.12Z" transform="translate(-29.6 -6)"/><path class="b" d="M50,36.75c-2.17.83-2.7,2.07-4.2,3.76-1.67,1.89-3.21,3.91-4.69,5.94a47.19,47.19,0,0,0-6.62,12.23c-.63,1.85-1.73,5-.64,6.82a2.05,2.05,0,0,0,2.06,1c1.42-.2,1.94-1.68,2.39-2.86.79-2.06,1.37-4.19,2.26-6.21a54,54,0,0,1,3.16-6c1.37-2.3,2.9-4.5,4.49-6.66.85-1.14,3.06-3.64,3.94-4.76s.31-.86.57-2.26c.18-1-1.36-1.83-2.51-1.39Z" transform="translate(-29.6 -6)"/><path class="b" d="M36.68,56.22a13,13,0,0,0-1.55,1.84A26.05,26.05,0,0,0,34,60.43c-.7,1.53-1.61,3.41-1.11,5.12a3.64,3.64,0,0,0,3.77,2.65c1.83-.13,3.17-1.62,4.42-2.81,2.36-2.27,4.57-4.68,7-6.93,1.17-1.11,2.37-2.21,3.62-3.25.61-.51,1.29-1,1.87-1.52s.65-1.26,1-2.09c.27-.67-.66-1.46-1.24-1.52a3.38,3.38,0,0,0-1.51.07,6.71,6.71,0,0,0-1.74,1c-1,.62-1.9,1.34-2.81,2a61.68,61.68,0,0,0-5.6,5.12c-.87.86-1.75,1.73-2.6,2.61-.46.47-.91.94-1.37,1.4-.3.31-1.06.81-1.22,1.2-.42.29-.18.47.71.53A6.29,6.29,0,0,1,37.23,63c.12-.7.26-1.41.41-2.11.3-1.36.44-2.6.62-4a.93.93,0,0,0-1.58-.66Z" transform="translate(-29.6 -6)"/><path class="b" d="M52.25,50.37c-3.12,2.22-4.87,6.36-6.3,9.8a22.52,22.52,0,0,0-1.69,5.49C44,67.54,44,70.4,46.07,71.29c1.85.81,2.82-1.05,3-2.59A26.72,26.72,0,0,1,50.48,63c.6-1.71,1.31-3.37,2-5a25.09,25.09,0,0,0,2.22-5.68c.21-1.29-1.16-2.86-2.49-1.91Z" transform="translate(-29.6 -6)"/><path class="b" d="M46.13,68.5a2.5,2.5,0,0,0,3.15,2.3c2.2-.47,3.71-3,4.95-4.7A141.17,141.17,0,0,0,63,51.81c5.6-9.8,11-19.69,17-29.29,3.33-5.38,6.91-10.59,10.19-16a.35.35,0,0,0-.54-.42c-6.75,7.24-11.84,16-16.84,24.46S63,47.9,58,56.51c-1.4,2.4-2.84,4.79-4.41,7.09-.62.9-5.1,7.74-6.25,4.74a.6.6,0,0,0-1.18.16Z" transform="translate(-29.6 -6)"/><path class="b" d="M67.64,62.72c3.33-.95,6.2-3.76,8.56-6.17a42.55,42.55,0,0,0,3.49-4.09c1.09-1.43,1.89-2.73,1.21-4.53a1.5,1.5,0,0,0-2.57-.12A34.47,34.47,0,0,1,73,54.87c-2,2.22-4.55,4.1-6.26,6.57a.85.85,0,0,0,.9,1.28Z" transform="translate(-29.6 -6)"/><path class="b" d="M111.22,62.72c3.33-.95,6.2-3.76,8.56-6.17a41.27,41.27,0,0,0,3.5-4.09c1.08-1.43,1.89-2.73,1.2-4.53a1.49,1.49,0,0,0-2.56-.12,34.88,34.88,0,0,1-5.34,7.06c-2,2.22-4.55,4.1-6.26,6.57a.85.85,0,0,0,.9,1.28Z" transform="translate(-29.6 -6)"/><path class="b" d="M64,61.9" transform="translate(-29.6 -6)"/><path class="c" d="M64,61.91s0,0,0,0,0,0,0,0Z" transform="translate(-29.6 -6)"/><path class="b" d="M93.21,48.26a2.07,2.07,0,0,1-.26,1c-.72,1.36-2.34,2.18-3.55,3-1.42,1-2.81,2.06-4.13,3.19-3.73,3.15-6.72,7.13-10.46,10.33C72.63,67.65,61.7,75.9,60.27,69.9a12.12,12.12,0,0,1,.84-6.53,33.09,33.09,0,0,1,6.58-10.79c2.44-2.67,7.24-7,11.27-6.2,1.19.25,2.26,1.47,1.88,2.63-.32,1-1.46,1.43-2.45,1.77A29.83,29.83,0,0,0,68.78,56c-2.29,1.92-8.33,8.51-6,11.93,1,1.42,4-.42,5.14-.93a37.66,37.66,0,0,0,10.4-7.82c3.08-3.15,5.66-6.8,9-9.64.61-.52,1.26-1,1.91-1.44a5.13,5.13,0,0,1,2.08-1.15,1.65,1.65,0,0,1,1.68.65A1.32,1.32,0,0,1,93.21,48.26Z" transform="translate(-29.6 -6)"/><path class="b" d="M129.77,53.44a28.52,28.52,0,0,1-3.32,4c-3.62,3.84-7.27,7.75-11.64,10.77A32.2,32.2,0,0,1,110,71c-1.6.72-4.45,2-5.87.31-1-1.14-.85-3-.67-4.34a16.89,16.89,0,0,1,.87-3.55,33.09,33.09,0,0,1,6.58-10.79c2.44-2.67,7.24-7,11.27-6.2,1.19.25,2.7,1,2.32,2.16-.32,1-1.9,1.9-2.89,2.24A29.83,29.83,0,0,0,112,56c-2.29,1.92-8.33,8.5-6,11.93.6.87,1.74.64,2.58.33a27.87,27.87,0,0,0,3.28-1.64,39.32,39.32,0,0,0,6.4-4.37c2.94-2.46,5.5-5.34,8.29-8l2-1.84a1.65,1.65,0,0,1,1.05-.54c.87,0,.54,1,.27,1.45Z" transform="translate(-29.6 -6)"/><path class="b" d="M95.78,65.3c-4.11,3.21-9.11,5.26-13.91,7.17a3,3,0,0,1-2.24.27.66.66,0,0,1-.34-.27.59.59,0,0,1,.15-.66,15,15,0,0,1,1.91-1.26c.71-.49,1.42-1,2.16-1.43,1.45-.89,3-1.76,4.44-2.64a37.2,37.2,0,0,0,5.26-3.28,74.1,74.1,0,0,1-10.64.3,3.78,3.78,0,0,1-2.62-1,3.3,3.3,0,0,1-.07-3.87A8.56,8.56,0,0,1,83,56c.24-.14.65-.21.71.06a.47.47,0,0,1-.14.36c-.89,1.15-2,2.41-2.17,3.91a.92.92,0,0,0,.07.57c.19.3.61.33,1,.32q4.88-.12,9.73-.47a14.8,14.8,0,0,1,4.46.13,2.08,2.08,0,0,1,1,.49,1.7,1.7,0,0,1,.15,2,4.39,4.39,0,0,1-1,1.16C96.46,64.75,96.12,65,95.78,65.3Z" transform="translate(-29.6 -6)"/><path class="b" d="M113.16,21.33c.61.29.07.78-.22,1.3-.5.91-1,1.82-1.53,2.74-1,1.77-1.88,3.56-2.74,5.38a113.78,113.78,0,0,0-8.09,23.18q-.72,3.12-1.26,6.28C99,62,99,69,99.76,70.71c.47,1.08,1,.4,1.68-.43s.52-2.75.6-3.84c.16-2.11.46-4.21.81-6.29a100.15,100.15,0,0,1,6.32-21.06,98,98,0,0,1,6.38-12.66c1.1-1.85,2.6-3.95,1.74-6.31-.8-2.19-3.26-3.07-4.78-1.32A1.74,1.74,0,0,0,113.16,21.33Z" transform="translate(-29.6 -6)"/><path class="b" d="M46,70.34c.22,1.38,2.08,1.31,3.06.91a7,7,0,0,0,3.55-3,.57.57,0,0,0-.63-.83c-1.44.45-2.62,1.36-4,1.88-.41.14-2.1.26-2,1Z" transform="translate(-29.6 -6)"/><path class="b" d="M45.84,70.25c.09.62.72.9,1.28,1A2,2,0,0,0,49,70.5a.4.4,0,0,0-.17-.66,4.34,4.34,0,0,0-1.39-.12c-.37,0-.72-.1-1.09-.08a.49.49,0,0,0-.46.61Z" transform="translate(-29.6 -6)"/><path class="b" d="M44.92,69.89c-.23.94,1.58,1.7,2.29,1.76,2,.17,4.49-2.09,5.16-3,.14-.2-2,1.27-2.18,1.22-1.4-.34-2.9.55-4.34.4a.23.23,0,0,0-.24.18Z" transform="translate(-29.6 -6)"/><path class="b" d="M81.24,70.39c.35-.22,1.65.67,1.41,1a3.25,3.25,0,0,1-2.72,1.44c-.45,0-1-.4-.66-.82,3.93-5.54,9.49-10.12,14.17-15A90.69,90.69,0,0,0,100.27,49c2.11-2.76,3.67-5.84,5.65-8.67.31-.45,1.13-.19.93.39-1.09,3.15-3.32,6.11-5.29,8.75A82.38,82.38,0,0,1,95.21,57c-2.38,2.53-4.88,4.95-7.42,7.33a60.69,60.69,0,0,0-6.71,7,4.29,4.29,0,0,1-1.3.06" transform="translate(-29.6 -6)"/><path class="b" d="M146.39,50.38a4.12,4.12,0,0,1-.51-1.19c-.23-1-.64-2.22-1.67-2.64a2.24,2.24,0,0,0-1.86.09,2.21,2.21,0,0,0-.87,1.16,23.4,23.4,0,0,0-.83,4.16c-.28,1.6-.54,3.21-.88,4.81-.61,2.95-1.31,5.89-2.11,8.8q-1,3.57-2.19,7.07A54.5,54.5,0,0,1,131,82.42c-.4.67-.82,1.31-1.25,2s-.75,1.52-1.26,2.24c-.85,1.2-1.88,2.26-2.82,3.39a1.19,1.19,0,0,0,1.43,1.86,19.35,19.35,0,0,0,7.19-6.61,53.12,53.12,0,0,0,5.22-10.55c3.21-8.41,8.2-23.12,4.49-25.95-1.32.36-1.08.46-2.41.82,0,0,1.56,2.35,1.74,2.57a8.57,8.57,0,0,0,2.31,2,1.27,1.27,0,0,0,1.8-.61,2,2,0,0,0-.32-2.07A10.11,10.11,0,0,1,146.39,50.38Z" transform="translate(-29.6 -6)"/><path class="b" d="M128.54,56.89" transform="translate(-29.6 -6)"/><path class="d" d="M128.54,57.67a.79.79,0,0,0,0-1.57.79.79,0,0,0,0,1.57Z" transform="translate(-29.6 -6)"/><path class="b" d="M126.93,60.93v-.09a.11.11,0,0,0-.21,0v.09a.11.11,0,0,0,.21,0Z" transform="translate(-29.6 -6)"/><path class="b" d="M144.3,47.24a12.74,12.74,0,0,1-1.93,6,46,46,0,0,1-9.78,12.57c-.43.39-.87.77-1.31,1.14-1.14.94-2.53,2-4.08,1.49a4.53,4.53,0,0,1-2.52-3.09,13.32,13.32,0,0,1,.17-6.18,15.67,15.67,0,0,1,2.21-5.26,4.69,4.69,0,0,1,2.67-2.22c1.15-.27,2.59.51,2.59,1.69s-1.08,1.88-1.71,2.68a22,22,0,0,0-2.21,3.26,9.54,9.54,0,0,0-1.21,4.39c0,.49.06,1.24.53,1.53s1.19-.18,1.58-.52a32.06,32.06,0,0,0,2.52-2.56c1.29-1.55,2.47-3.14,3.6-4.76a57.25,57.25,0,0,0,3.4-5.4,27.43,27.43,0,0,1,3.38-5.26C142.8,46.09,144.28,46.52,144.3,47.24Z" transform="translate(-29.6 -6)"/></svg>
                </div>
			</div>
		</div>

        <div class="hg-link">
            <p><a href="https://harrygautier.com" target="_blank" rel="noopener">- CRAFTED BY HARRY -</a></p>
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

		<!--my js-->
		<script src="js/main.js" type="text/javascript"></script>
  </body>
</html>
