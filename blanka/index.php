<?php
session_start();

?>
<!DOCTYPE HTML>
<!--
	Stellar by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Czeisel Blanka</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<?php 
							include("inc/fejlec.inc.php"); 
						?>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<?php
							include 'inc/menu.php';
						?>
					</nav>

				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										
											<?php
												if (isset($_GET['oldal'])) {
 												if($_GET['oldal']=="videos") include("pages/videos_content.html");
 												if($_GET['oldal']=="album") include("pages/album_content.php");
 												if($_GET['oldal']=="contact") include("pages/contact_content.php");
 												if($_GET['oldal']=="msg") include("pages/msg_content.php");
 												if($_GET['oldal']=="logout") include("pages/logout_content.php");
 												if($_GET['oldal']=="login") include("pages/login_content.html");
 												}
 												else {
												include("pages/mainpage_content.html");
												}
											?>
									</div>
									
								</div>
							</section>				
				<!-- Footer -->
					<footer id="footer">
						<section>
							<h2>Ha találkozni szeretnél velem, hívd a Google autót! :)</h2>
						<div class="mapouter"><div><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Nagyk%C5%91r%C3%B6s%2C%20F%C3%A1skert%20utca%201%20&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
						</section>
						<section>
							<ul class="icons">		
								<li><a href="https://www.instagram.com/" class="icon brands fa-facebook-f alt"><span class="label">Facebook</span></a></li>
								<li><a href="https://www.facebook.com/TheHoonigans" class="icon brands fa-instagram alt"><span class="label">Instagram</span></a></li>								
							</ul>						
						</section>
						<p class="copyright">Beadandó</p>
					</footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>