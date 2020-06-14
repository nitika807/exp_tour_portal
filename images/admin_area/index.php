<?php 
session_start();
if(!isset($_SESSION['admin_email'])){
	@session_start();
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{
	
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Admin Panel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/news_styles.css">
<link rel="stylesheet" type="text/css" href="styles/news_responsive.css">
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
								<div>travel experience tours</div>
								<div class="logo_image"><img src="images/logo.png" alt=""></div>
							</div>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav ml-auto">
							<ul class="main_nav_list">
								<li class="main_nav_item"><h2 style="color:white; transform: translate(-40%);"> Manage Your Account </h2></li>
								
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>

</br></br></br>


	<!-- Admin Panel -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-9">
					<div class="news_posts">
					<h3 style="padding:20px;"><?php echo @$_GET['logged_in'];?></h3>
						<?php 
						include("includes/connect.php");
						if(isset($_GET['insert_post'])){
							include("insert_post.php");
						}
	
						if(isset($_GET['view_posts'])){
							include("view_posts.php");
						}
						if(isset($_GET['edit_post'])){
							include("edit_post.php");
						}
						if(isset($_GET['edit_image'])){
							include("edit_image.php");
						}
						
						if(isset($_GET['view_cats'])){
							include("view_cats.php");
						}

						if(isset($_GET['insert_cat'])){
							include("insert_cat.php");
						}
						

						if(isset($_GET['edit_cat'])){
							include("edit_cat.php");
						}

						if(isset($_GET['edit_cat_img'])){
							include("edit_cat_img.php");
						}

						if(isset($_GET['delete_cat'])){
							include("delete_cat.php");
						}

						if(isset($_GET['view_customers'])){
							include("view_customers.php");
						}
						if(isset($_GET['view_orders'])){
							include("view_orders.php");
						}
						if(isset($_GET['delete_order'])){
							include("delete_order.php");
						}
						if(isset($_GET['view_payments'])){
							include("view_payments.php");
						}

						?>
					</div>
				</div>

				<!-- Sidebar -->
				<div class="col-lg-3">
					<div class="sidebar">

							<!-- Offer -->
							<div class="sidebar_offer">
								<div class="sidebar_offer_background" style="background:#131a2f;"></div>
								<div class="sidebar_offer_title"><a href="index.php" style="color:white;"><b>Manage Content</b></div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?insert_post" style="color:white;">Insert New Post</a></div>
								</div></br>
									<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?view_posts"style="color:white;">View All Posts</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?insert_cat"style="color:white;">Insert New Category</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?view_cats"style="color:white;">View All Categories</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?view_customers"style="color:white;">View All Customers</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?view_orders"style="color:white;">View All Orders</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="index.php?view_payments"style="color:white;">View Payments</a></div>
								</div></br>
								<div class="sidebar_offer_content">
									<div class="sidebar_offer_title"><a href="logout.php" style="color:white;">Logout</a></div>
								</div>
							</div>


					</div>
				</div>

			</div>
		</div>
	</div>

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
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/news_custom.js"></script>
</body>
</html>
<?php } ?>