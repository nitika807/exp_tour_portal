<!DOCTYPE html>
<?php
include("includes/connect.php");
include("functions/functions.php");
?>
<html lang="en">
<head>
<title>Elements</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/elements_styles.css">
<link rel="stylesheet" type="text/css" href="styles/elements_responsive.css">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_container d-flex flex-row align-items-center justify-content-start">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Lexia</div>
								<div>experience enjoy educate</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><a href="index.php">Home</a></li>
								<li class="main_nav_item"><a href="about.php">About us</a></li>
								<li class="main_nav_item"><a href="offers.php">Offers</a></li>
								<li class="main_nav_item"><a href="news.php">News</a></li>
								<li class="main_nav_item"><a href="contact.php">Contact</a></li>
								<li class="main_nav_item"><a href="customer/my_account.php">My Account</a></li>
								<?php 
								if(isset($_SESSION['customer_email'])){
								echo "<span style= 'display:none;'><li class='main_nav_item'><a href='checkout.php'>Login</a></li></span>";
								}
								else{
									echo "<li class='main_nav_item'><a href = 'checkout.php'> Login</a></li>";
								}
								?>
							</ul>
						</nav>

						<!-- Search -->
						<div class="search">
							<form method="get" action="results.php" class="search_form">
								<input type="search" name="search_input" class="search_input ctrl_class" required="required" placeholder="Keyword">
								<button type="submit" name="search" class="search_button ml-auto ctrl_class"><img src="images/search.png" alt=""></button>
							</form>
						</div>

						<!-- Hamburger -->
						<div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>

					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
				<div class="menu_search_form_container">
					<form action="#" id="menu_search_form">
						<input type="search" class="menu_search_input menu_mm">
						<button id="menu_search_submit" class="menu_search_submit" type="submit"><img src="images/search_2.png" alt=""></button>
					</form>
				</div>
				<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.php">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>
					<li class="menu_item menu_mm"><a href="customer/my_account.php">My Account</a></li>
					<?php 
						if(isset($_SESSION['customer_email'])){
						echo "<span style= 'display:none;'><li class='menu_item menu_mm'><a href='checkout.php'>Login</a></li></span>";
						}
						else{
							echo "<li class='menu_item menu_mm'><a href = 'checkout.php'> Login</a></li>";
						}
					?>
				</ul>

				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					<ul class="menu_social menu_mm">
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="menu_social_item menu_mm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					</ul>
				</div>

				<div class="menu_copyright menu_mm">Colorlib All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<!-- Image by https://unsplash.com/@peecho -->
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/elements.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">Elements</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="index.php">Home</a></li>
									<li class="home_breadcrumb">Elements</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Elements -->

	<div class="elements">

		<!-- Buttons -->

		<div class="buttons">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Buttons</div>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<div class="buttons_container">
							<div class="button button_1 elements_button"><a href="#">Button</a></div>
							<div class="button button_2 elements_button"><a href="#">Button</a></div>
							<div class="button button_3 elements_button"><a href="#">Button</a></div>
							<div class="button button_4 elements_button"><a href="#">Button</a></div>
						</div>
					</div>
				</div>
			</div>	
		</div>

		<!-- Accordions & Tabs -->

		<div class="accordions_tabs">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Accordions & Tabs</div>
					</div>
				</div>
				<div class="row accordions_tabs_container">
					<div class="col-lg-6">
						
						<!-- Accordions -->

						<div class="accordions_content">
							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</div></div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam em ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center"><div>Fusce fringilla lectus nec diam auctor, ut fringilla diam.</div></div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam em ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor.</p>
								</div>
							</div>

							<div class="accordion_container">
								<div class="accordion d-flex flex-row align-items-center active"><div>Fusce fringilla lectus nec diam auctor, ut fringilla diam.</div></div>
								<div class="accordion_panel">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam em ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="col-lg-6">
						
						<!-- Tabs -->
						<div class="tabs_container">
							<div class="tabs d-flex flex-row align-items-center justify-content-around">
								<div class="tab">FAQ</div>
								<div class="tab">Some facts</div>
								<div class="tab active">Why choose us?</div>
								<div class="tab">Basic stuff</div>
							</div>
							<div class="tab_panels">
								<div class="tab_panel">
									<div class="tab_panel_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor.</p>
									</div>
								</div>
								<div class="tab_panel">
									<div class="tab_panel_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
								<div class="tab_panel active">
									<div class="tab_panel_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectu.</p>
									</div>
								</div>
								<div class="tab_panel">
									<div class="tab_panel_content">
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sLorem ipsum dolor sit amet.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Loaders -->

		<div class="loaders">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Loaders</div>
					</div>
				</div>
				<div class="row loaders_container">
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.70"><span>Exotic Trips</span></div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.90"><span>Happy Clients</span></div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.63"><span>Tour Guides</span></div>
					</div>
					<div class="col-lg-3 loader_col">
						<!-- Loader -->
						<div class="loader" data-perc="0.59"><span>Cruises in '17</span></div>
					</div>
				</div>
			</div>
		</div>

		<!-- Milestones -->

		<div class="milestones">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Milestones</div>
					</div>
				</div>
				<div class="row milestones_container">
					
					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img class="svg" src="images/milestone_1.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="17">0</div>
							<div class="milestone_text">Mountains Climbed</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img class="svg" src="images/milestone_2.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="213">0</div>
							<div class="milestone_text">Islands Visited</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img class="svg" src="images/milestone_3.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="11923">0</div>
							<div class="milestone_text">Photos Taken</div>
						</div>
					</div>

					<!-- Milestone -->
					<div class="col-lg-3 milestone_col">
						<div class="milestone text-center">
							<div class="milestone_icon"><img class="svg" src="images/milestone_4.svg" alt=""></div>
							<div class="milestone_counter" data-end-value="15">0</div>
							<div class="milestone_text">Cruises Organized</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<!-- Icon Boxes -->

		<div class="icon_boxes">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="elements_title">Icon Boxes</div>
					</div>
				</div>
				<div class="row icon_box_container">

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/service_1.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title">Weekend trips</div>
							<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
							<a href="#" class="icon_box_more">Read More</a>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/service_2.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title">Fun leisure trips</div>
							<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
							<a href="#" class="icon_box_more">Read More</a>
						</div>
					</div>

					<!-- Icon Box -->
					<div class="col-lg-4 icon_box_col">
						<div class="icon_box">
							<div class="icon_box_image"><img src="images/service_3.svg" class="svg" alt="https://www.flaticon.com/authors/monkik"></div>
							<div class="icon_box_title">Plane tickets</div>
							<p class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adip iscing elit. Fusce fringilla lectus nec diam auctor, ut fringilla diam sagittis.</p>
							<a href="#" class="icon_box_more">Read More</a>
						</div>
					</div>

				</div>
			</div>
		</div>
			
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_about">
						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<div>Lexia</div>
								<div style="color:black;"><b>experience enjoy educate</b></div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>
						<div class="footer_about_text">Discover and relish unique travel experiences.</div>
						<div class="copyright"><!-- Link back to Colorlib removed upon payment. Reference Aigars Silkalns Email dated 14/01/2020.  Template is licensed under CC BY 3.0. We acknowledge https://colorlib.com as its original developer -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <!--This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by--> <a href="https://www.envisionit.com.au" style="color:black;" target="_blank">Goutam - Envision IT</a>
<!-- Link back to Colorlib removed upon payment. Reference Aigars Silkalns Email dated 14/01/2020.  Template is licensed under CC BY 3.0. We acknowledge https://colorlib.com as its original developer--></div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="footer_latest">
						<div class="footer_title"><b>Latest News</b></div>
						<div class="footer_latest_content">

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_1.jpg" alt="https://unsplash.com/@peecho"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Durga Puja</a></div>
									<div class="footer_latest_item_date"><b>October, 2020</b></div>
								</div>
							</div>

							<!-- Footer Latest Post -->
							<div class="footer_latest_item">
								<div class="footer_latest_image"><img src="images/latest_2.jpg" alt="https://unsplash.com/@sanfrancisco"></div>
								<div class="footer_latest_item_content">
									<div class="footer_latest_item_title"><a href="news.html">Footy Grand Final</a></div>
									<div class="footer_latest_item_date"><b>September, 2020</b></div>
								</div>
							</div>

						</div>
					</div>
				</div>

				<!-- Footer Column -->
				<div class="col-lg-4 footer_col">
					<div class="tags footer_tags">
						<div class="footer_title"><b>Tags</b></div>
						<ul class="tags_content d-flex flex-row flex-wrap align-items-start justify-content-start">
							<li class="tag"><a href="#">Offer</a></li>
							<li class="tag"><a href="#">Experience</a></li>
							<li class="tag"><a href="#">Adventure</a></li>
							<li class="tag"><a href="#">Culinary</a></li>
							<li class="tag"><a href="#">Home Stays</a></li>
							<li class="tag"><a href="#">Farms</a></li>
							<li class="tag"><a href="#">Spiritual</a></li>
							<li class="tag"><a href="#">Festivals</a></li>
							<li class="tag"><a href="#">Well Being</a></li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</footer>
</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/progressbar/progressbar.min.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/elements_custom.js"></script>
</body>
</html>
<div class="icon-bar">
  <a href="index.php" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="index.php" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="index.php" class="youtube"><i class="fa fa-youtube"></i></a>
  <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top" class="google"><i class="fa fa-google"></i></a>
  <a href="index.php" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  <a href="index.php" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
  <!--<a href="tel:+61-444-444-444" class ="phone"><i class="fa fa-phone"></i></a> -->
</div>