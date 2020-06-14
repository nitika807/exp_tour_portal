<!DOCTYPE html>
<?php 
session_start();
include("includes/connect.php");
include("functions/functions.php");
?>
<html lang="en">
<head>
<title>Lexia Experience Enjoy Educate</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link href="plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
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
								<li class="main_nav_item active"><a href="index.php">Home</a></li>
								<li class="main_nav_item"><a href="about.php">About us</a></li>
								<li class="main_nav_item"><a href="offers.php">Offers</a></li>
								<li class="main_nav_item"><a href="news.php">News</a></li>
								<li class="main_nav_item"><a href="contact.php">Contact</a></li>
								<?php 
								if(!isset($_SESSION['customer_email'])){
								echo "<li class='main_nav_item'><a href='checkout.php'>My Account</a></li>";
								}
								else{
									echo "<li class='main_nav_item'><a href = 'customer/my_account.php'> My Account</a></li>";
								}
								
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
					<li class="menu_item menu_mm active"><a href="index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="offers.php">Offers</a></li>
					<li class="menu_item menu_mm"><a href="news.php">News</a></li>
					<li class="menu_item menu_mm"><a href="contact.php">Contact</a></li>					
					<?php 
								if(!isset($_SESSION['customer_email'])){
								echo "<li class='menu_item menu_mm'><a href='checkout.php'>My Account</a></li>";
								}
								else{
									echo "<li class='menu_item menu_mm'><a href = 'customer/my_account.php'> My Account</a></li>";
								}
								
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

				<div class="menu_copyright menu_mm">(c) Goutam - Envision IT | All rights reserved</div>
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background" style="background-image:url(images/home.jpg)"></div>
		<div class="home_content">
			<div class="home_content_inner">

				<div class="home_text_large">.</div>
				<div class="home_text_large">.</div>
				<div class="home_text_large">.</div>
				<div class="home_text_small">Don’t just travel. Travel to change.</div>
			</div>
		</div>
	</div>

	<!-- Find Form -->
	
	

	<div class="find" style="display:none;"> REMOVE THIS to ACTIVATE FIND
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		 
		<div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center">Find the Adventure of a lifetime</div>
				</div>
				<div class="col-12">
					<div class="find_form_container">
						<form action="#" id="find_form" class="find_form d-flex flex-md-row flex-column align-items-md-center align-items-start justify-content-md-between justify-content-start flex-wrap">
							<div class="find_item">
								<div>Destination:</div>
								<input type="text" class="destination find_input" required="required" placeholder="Keyword here">
							</div>
							<div class="find_item">
								<div>Adventure type:</div>
								<select name="adventure" id="adventure" class="dropdown_item_select find_input">
									<option>Categories</option>
									<option>Categories</option>
									<option>Categories</option>
								</select>
							</div>
							<div class="find_item">
								<div>Min price</div>
								<select name="min_price" id="min_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<div class="find_item">
								<div>Max price</div>
								<select name="max_price" id="max_price" class="dropdown_item_select find_input">
									<option>&nbsp;</option>
									<option>Price</option>
									<option>Price</option>
								</select>
							</div>
							<button class="button find_button">Find</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Top Destinations -->

	<div class="top">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Our Top Experiences</h2>
						<div>take a look at these experiences</div>
					</div>
				</div>
			</div>
			<div class="row top_content">
			<!--Top Destination-->
				<?php getCats(); ?>
					</div>

			</div>
		</div>

<!--Blurb -->
			<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Women Empowerment</h2>
						
						<div style="color:#131a2f;"></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="last">
		<!-- Image by https://unsplash.com/@thanni -->
		<!--<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>-->

		<div class="container">
			<div class="row">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_text">“Woman is the companion of man, gifted with equal mental capacity.”- Gandhi.</br></br>
						Empowerment of women is a necessity for the very development of a society, since it enhances both the quality and the quantity of human resources available for development. It is not a very current phenomena in many societies it has been the way of life for generations.
						Multiple tribes in the state of Meghalaya in northeast India practise matrilineal descent. Often referred to as Khasi people and Garo people. The Khasi, Garo, and other subgroups have a proud heritage, including matrilineality. When early European settlers first arrived here, they nicknamed it "the Scotland of the East".
						The tribes are said to belong to one of the "largest surviving matrilineal culture" in the world. Care of children is the responsibility of mothers or mothers-in-law. The youngest daughter of this society who inherits the ancestral property holds a pivotal role of looking after the welfare of her parents in their old age, as well as the welfare and education of her siblings.
						Come and enjoy the journey with these women leaders who been the inspirations, the hero, the leader of the community.</div>
						</div>
					</div>
			</div>
		</div>
	</div>

	
	<!-- Special -->
	
		<div class="special">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Inaugural offers</h2>
						<div>TAKE A LOOK AT THESE OFFERS</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	
	
	
	<!-- Last -->

	<div class="last">
		<!-- Image by https://unsplash.com/@thanni -->
		<div class="last_background parallax-window" data-parallax="scroll" data-image-src="images/last.jpg" data-speed="0.8"></div>

		<div class="container">
			<div class="row">
				<div class="last_logo"><img src="images/last_logo.png" alt=""></div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle"></div>
							<div class="last_percent"></div>
							<div class="last_title">Coming up</div>
							<div class="last_text"></div>
							<!--<div class="button last_button"><a href="offers.html"></a></div>-->
						</div>
					</div>
				</div>
				<div class="col-lg-6 last_col">
					<div class="last_item">
						<div class="last_item_content">
							<div class="last_subtitle"></div>
							<div class="last_percent"></div>
							<div class="last_title">Coming up</div>
							<div class="last_text"></div>
							<!--<div class="button last_button"><a href="offers.html"></a></div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Video -->

	<!-- MASKED BY STEVE
	<div class="video_section d-flex flex-column align-items-center justify-content-center" > MASKED BY STEVE-->

		<!-- Image by https://unsplash.com/@peecho -->
		<!-- MASKED BY STEVE
<div class="video_background parallax-window" data-parallax="scroll" data-image-src="images/video.jpg" data-speed="0.8" ></div>
		<div class="video_content">
			<div class="video_title">A day on the island</div>
			<div class="video_subtitle">A trip organized by Destino's team</div>
			<div class="video_play">
				<a  class="video" href="https://www.youtube.com/watch?v=BzMLA8YIgG0">
					<svg version="1.1" id="Layer_1" class="play_button" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
						 width="140px" height="140px" viewBox="0 0 140 140" enable-background="new 0 0 140 140" xml:space="preserve">
						<g id="Layer_2">
							<circle class="play_circle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" cx="70.333" cy="69.58" r="68.542"/>
							<polygon class="play_triangle" fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" points="61.583,56 61.583,84.417 84.75,70 	"/>
						</g>
					</svg>
				</a>
			</div>
		</div>
	</div>
	 MASKED BY STEVE-->


	<!-- Popular --> 

	<div class="popular" style="display:none;"	>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Popular destinations in 2018</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<div class="popular_content d-flex flex-md-row flex-column flex-wrap align-items-md-center align-items-start justify-content-md-between justify-content-start"> 
						
						<!-- Popular Item -->
						

						
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_1.jpg" alt="image by Egzon Bytyqi">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Turkey</div>
								</div>
							</a>	
						</div> 


						<!-- Popular Item -->
						<!--MASKING BY STEVE

						
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_2.jpg" alt="https://unsplash.com/@michael75">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Hawai</div>
								</div>
							</a>	
						</div> <!--MASKING BY STEVE-->


						<!-- Popular Item -->
						<!--MASKING BY STEVE

						
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_3.jpg" alt="https://unsplash.com/@sapegin">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Ireland</div>
								</div>
							</a>	
						</div> <!--MASKING BY STEVE -->

						<!-- Popular Item -->
						
						
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_4.jpg" alt="https://unsplash.com/@kensuarez">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Thailand</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_5.jpg" alt="https://unsplash.com/@noahbasle">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Croatia</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_6.jpg" alt="https://unsplash.com/@seb">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Bali</div>
								</div>
							</a>
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_7.jpg" alt="https://unsplash.com/@nevenkrcmarek">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">France</div>
								</div>
							</a>	
						</div>

						<!-- Popular Item -->
						<div class="popular_item">
							<a href="offers.html">
								<img src="images/popular_8.jpg" alt="https://unsplash.com/@bergeryap87">
								<div class="popular_item_content">
									<div class="popular_item_price">From $890</div>
									<div class="popular_item_title">Vietnam</div>
								</div>
							</a>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Special -->

	<div class="special" style="display:none;">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center">
						<h2>Special offers</h2>
						<div>take a look at these offers</div>
					</div>
				</div>
			</div>
		</div>
		<div class="special_content">
			<div class="special_slider_container">
				<div class="owl-carousel owl-theme special_slider">
					
					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item">
							<div class="special_item_background"><img src="images/special_1.jpg" alt="https://unsplash.com/@garciasaldana_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Indonesia</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_2.jpg" alt="https://unsplash.com/@varshesh"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Culture</div>
								<div class="special_title"><a href="offers.html">India</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_3.jpg" alt="https://unsplash.com/@paulgilmore_"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Sunbathing</div>
								<div class="special_title"><a href="offers.html">Thailand</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_4.jpg" alt="https://unsplash.com/@hellolightbulb"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">Bali</a></div>
							</div>
						</div>
					</div>

					<!-- Special Offers Item -->
					<div class="owl-item">
						<div class="special_item d-flex flex-column align-items-center justify-content-center">
							<div class="special_item_background"><img src="images/special_5.jpg" alt="https://unsplash.com/@dnevozhai"></div>
							<div class="special_item_content text-center">
								<div class="special_category">Visiting</div>
								<div class="special_title"><a href="offers.html">France</a></div>
							</div>
						</div>
					</div>

				</div>

				<div class="special_slider_nav d-flex flex-column align-items-center justify-content-center">
					<img src="images/special_slider.png" alt="">
				</div>
			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="newsletter_background" style="background-image:url(images/newsletter.jpg)"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1">
					<div class="newsletter_content">
						<div class="newsletter_title text-center">Subscribe to our Newsletter</div>
						<div class="newsletter_form_container">
							<form action="index.php" method="post" enctype="multipart/form-data" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" name="newsletter" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" name="sub_news"id="newsletter_button" class="newsletter_button">Subscribe</button>
								</div>
							</form>
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
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="js/custom.js"></script>
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
<?php 
if(isset($_POST['sub_news'])){
	
	$c_email= $_POST['newsletter'];
	$c_email = filter_var($c_email, FILTER_SANITIZE_EMAIL);
	if (filter_var($c_email, FILTER_VALIDATE_EMAIL)){
	$insert_news = "insert into subscribe (email) values ('$c_email')";
	$run_customer = mysqli_query($con, $insert_news);
	echo "<script>alert('Thank you for subscribing to our newsletter!')</script>";
	
	echo "<script>window.open('index.php','_self')</script>";
	}
}
?>
	