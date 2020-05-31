<?php
session_start ();

?>

<!DOCTYPE HTML>
<html>

<head>
    <title>HEDORAH</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <link rel="stylesheet" href="assets/css/main4.css" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
</head>

<body class="is-preload">
		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<div class="logo">
							<div class="logo-small">
							<span><img src="images/logo petit.png" alt="" style="width: 4em"/></span></div>
						</div>
						<div class="content">
							<div class="inner">
								<img src="images/Logo3.png" alt="" />
								<h1>We draw the Gods</h1>
								</div>
								<a href="#listen" >
									<span id="button-text">Listen now</span>
								</a>
						</div>
						<nav>
							<ul>
								<li><a href="#intro">Band</a></li>
								<li><a href="#work">News</a></li>
								<li><a href="#live">Gallery</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
								<li><a href="https://blackswanoff.bandcamp.com/">Store</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
					
						<!-- Intro -->
							<article id="intro">
								<?php include "Pages\Intro.html"?>
							</article>

						<!-- Work -->
							<article id="work">
								<?php include "Pages\Work.html"?>
							</article>

							<!-- Listen -->
							<article id="listen">
								<?php include "Pages\Listen.html"?>
							</article>

							<!-- Live -->
							<article id="live">
								<?php include "Pages\Live.html"?>
							</article>

						<!-- About -->
							<article id="about">
								<?php include "Pages\About.html"?>
							</article>

						<!-- Contact -->
							<article id="contact">
								<?php include "Pages\contact.php"?>
							</article>

						<!-- Contact -->
							<article id="store">
								<?php include "Pages\Store.php"?>
							</article>
					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">&copy; HEDORAH</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

</body>
</html>

