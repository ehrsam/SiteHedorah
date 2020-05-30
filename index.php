<?php
session_start ();

?>

<?php include "Header\header.html"?>
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
								<li><a href="#intro">Intro</a></li>
								<li><a href="#work">Work</a></li>
								<li><a href="#shop">Shop</a></li>
								<li><a href="#live">Live</a></li>
								<li><a href="#about">About</a></li>
								<li><a href="#contact">Contact</a></li>
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
			<script src="assets/js/form.js"></script>
