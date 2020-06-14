<!DOCTYPE html>
<?php
session_start();
include("includes/connect.php");
include("functions/functions.php");
if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('../checkout.php','_self')</script>";
	
}
else{
cart();
?>
<html lang="en">
<head>
<title>My Account</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
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
								<a href="../index.php"><div>Lexia</div>
								<div>experience enjoy educate</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></a></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
						
							<ul class="main_nav_list">
							
								<li class="main_nav_item"><a href="../index.php">Home</a></li>
								<li class="main_nav_item"><a href="../about.php">About us</a></li>
								<li class="main_nav_item"><a href="../offers.php">Offers</a></li>
								<li class="main_nav_item"><a href="../news.php">News</a></li>
								<li class="main_nav_item"><a href="../contact.php">Contact</a></li>
								<li class="main_nav_item active"><a href="my_account.php">My Account</a>
							<ul>
								<?php 
								if(!isset($_SESSION['customer_email'])){
								echo "<li><a class='dropdown' href='../checkout.php'>My Orders</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?my_orders'> My Orders</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<span style='display:none;'><li><a class='dropdown' href='../checkout.php'>Cart</a></li></span>";
								}
								else{
									echo "<li ><a class='dropdown' href = '../cart.php'> Cart</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Edit Account</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?edit_account'> Edit Account</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Change Password</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?change_pass'> Change Password</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Delete Account</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?delete_account'> Delete Account</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<span style='display:none;'><li><a class='dropdown' href='../checkout.php'>Logout</a></li></span>";
								}
								else{
									echo "<li ><a class='dropdown' href = '../logout.php'> Logout</a></li>";
								}
								
								?>
								
								</ul>
								</li>
								<?php 
								if(isset($_SESSION['customer_email'])){
								echo "<span style= 'display:none;'><li class='main_nav_item'><a href='../checkout.php'>Login</a></li></span>";
								}
								else{
									echo "<li class='main_nav_item'><a href = '../checkout.php'> Login</a></li>";
								}
								?>
							
							</ul>
							
						</nav>

						<!-- Search -->
						<div class="search">
							<form method="get" action="../results.php" class="search_form">
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
				<<ul class="menu_list menu_mm">
					<li class="menu_item menu_mm"><a href="../index.php">Home</a></li>
					<li class="menu_item menu_mm"><a href="../about.php">About us</a></li>
					<li class="menu_item menu_mm"><a href="../offers.php">Offers</a></li>
					<li class="menu_item menu_mm"><a href="../news.php">News</a></li>
					<li class="menu_item menu_mm"><a href="../contact.php">Contact</a></li>					
					<li class="menu_item menu_mm"><a href="my_account.php">My Account</a>
					<ul>
								<?php 
								if(!isset($_SESSION['customer_email'])){
								echo "<li><a class='dropdown' href='../checkout.php'>My Orders</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?my_orders'> My Orders</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<span style='display:none;'><li><a class='dropdown' href='../checkout.php'>Cart</a></li></span>";
								}
								else{
									echo "<li ><a class='dropdown' href = '../cart.php'> Cart</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Edit Account</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?edit_account'> Edit Account</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Change Password</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?change_pass'> Change Password</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<li ><a class='dropdown' href='../checkout.php'>Delete Account</a></li>";
								}
								else{
									echo "<li ><a class='dropdown' href = 'my_account.php?delete_account'> Delete Account</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<span style='display:none;'><li><a class='dropdown' href='../checkout.php'>Logout</a></li></span>";
								}
								else{
									echo "<li ><a class='dropdown' href = '../logout.php'> Logout</a></li>";
								}
								if(!isset($_SESSION['customer_email'])){
								echo "<span style='display:none;'><li><a class='dropdown' href='../checkout.php'>Cart</a></li></span>";
								}
								else{
									echo "<li ><a class='dropdown' href = '../cart.php'> Cart</a></li>";
								}
								?>
								</ul></li>
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
		<div class="home_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="home_content">
						<div class="home_content_inner">
							<div class="home_title">My Account</div>
							<div class="home_breadcrumbs">
								<ul class="home_breadcrumbs_list">
									<li class="home_breadcrumb"><a href="../index.php">Home</a></li>
									<li class="home_breadcrumb">My Account</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>

	<!-- Find Form -->

	<div class="find">
		<!-- Image by https://unsplash.com/@garciasaldana_ -->
		<div class="find_background_container prlx_parent">
			<div class="find_background prlx" style="background-image:url(images/find.jpg)"></div>
		</div>
		<!-- <div class="find_background parallax-window" data-parallax="scroll" data-image-src="images/find.jpg" data-speed="0.8"></div> -->
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="find_title text-center"><h2>Manage Your Account</h2></div>
				</div>
				
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="offers">
		<div class="container">
		<p style="text-align:right;"><?php if(!isset($_SESSION['customer_email'])){
			
			echo "Welcome Guest!";
		} else{
			echo "Welcome ".$_SESSION['customer_email'];
		}?> <a href="../cart.php"> Go to Cart</a> &nbsp; 
		<?php 
		if(!isset($_SESSION['customer_email'])){
		echo "<a href='../checkout.php'>Login</a>"; }
			else{
				
				echo "<a href='../logout.php'>Logout</a>";
			}?></p>
			<div class="row">

				<!-- News Posts -->
				<div class="col">

						<?php getDefault(); ?>
						<?php if(isset($_GET['my_orders'])){
							
							include("my_orders.php");
							
						} ?>
						<?php if(isset($_GET['edit_account'])){
							
							include("edit_account.php");
							
						} ?>
						<?php if(isset($_GET['change_pass'])){
							include("change_pass.php");
						}?>
						<?php if(isset($_GET['delete_account'])){
							include("delete_account.php");
						}?>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">
						
						<!-- Featured Posts
						<div class="sidebar_featured">
						<div class="sidenav">
						<?php 
						$customer_session= $_SESSION['customer_email'];
						
						$get_customer_pic = "select * from customers where customer_email = '$customer_session'";
						
						$run_customer = mysqli_query($con, $get_customer_pic);
						$row_customer = mysqli_fetch_array($run_customer);
						$customer_pic = $row_customer['customer_image'];
						
						echo "<img src='customer_photos/$customer_pic' class='img-thumbnail'>";
						
				?>
								
						</div>
						</div>	-->
							
						</div>

						
						<!-- Sidebar Quote -->
						</div>
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
							<form action="#" id="newsletter_form" class="newsletter_form">
								<div class="d-flex flex-md-row flex-column align-content-center justify-content-between">
									<input type="email" id="newsletter_input" class="newsletter_input" placeholder="Your E-mail Address">
									<button type="submit" id="newsletter_button" class="newsletter_button">Subscribe</button>
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
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/offers_custom.js"></script>
</body>
</html>
<div class="icon-bar">
  <a href="../index.php" class="facebook"><i class="fa fa-facebook"></i></a>
  <a href="../index.php" class="twitter"><i class="fa fa-twitter"></i></a>
  <a href="../index.php" class="youtube"><i class="fa fa-youtube"></i></a>
  <a href="mailto:someone@example.com?Subject=Hello%20again" target="_top" class="google"><i class="fa fa-google"></i></a>
  <a href="../index.php" class="insta"><i class="fa fa-instagram" aria-hidden="true"></i></a>
  <a href="../index.php" class="pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
  <!--<a href="tel:+61-444-444-444" class ="phone"><i class="fa fa-phone"></i></a> -->
</div>
<?php }?>