<!DOCTYPE html>
<?php
include("includes/connect.php");
@session_start();
if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{

 ?>
<html lang="en">
<head>
<title>Insert Post</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/insert_post_styles.css">
<link rel="stylesheet" type="text/css" href="insert_post_responsive.css">
</head>
<body>

<div class="super_container">
	

	<!-- Offers -->

	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col"></br>
					<h3>Insert New Category Here!</h3><br>
					<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>Category Title:</label>
						<input type="text" name= "cat_title" class="form-control" placeholder="Category Name" >
						
					</div>
				
					<div class="form-group">
						<label>Upload image:</label>
						<input type="file" name ="image" class="form-control" >
					</div>
					<div class="form-group">
					
					<button type="button" name="no" class="btn btn-primary" ><a href="index.php?view_cats" style="color:white">Cancel</a></button>
						<input type="submit" name= "submit" class="btn btn-primary" value="Submit"> 
					</div>

				</form>
				<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
				

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
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="plugins/parallax-js-master/parallax.min.js"></script>
<script src="js/insert_post.js"></script>
</body>
</html>

<?php

if(isset($_POST['submit'])){
	$cat_title = addslashes($_POST['cat_title']);
	$images_name = $_FILES['image']['name'];
	$images_type = $_FILES['image']['type'];
	$images_size = $_FILES['image']['size'];
	$images_tmp = $_FILES['image']['tmp_name'];
	
	
	if($cat_title == '' or $images_name == '' ){
		echo "<script>alert('Please fill all fields!')</script>";
		
	}
	if($images_type == "image/jpeg" or $images_type == "image/png" or $images_type == "image/gif"){
		if($images_size <= 200000 && $images_size >= 100000){
			move_uploaded_file($images_tmp, "../images2/$images_name");
			
		}
		else {
			
			echo "<script>alert('Please upload image upto 200kb only.')</script>";
			exit();
		}
	}
	else{
	echo "<script>alert('Image type is invalid!')</script>";
	exit();
	}
	$query = "insert into categories(cat_title,cat_image) values('$cat_title', '$images_name')";
	if(mysqli_query($con, $query)){
		
		echo "<script>alert('New Category has been added!')</script>";
		echo "<script>window.open('index.php?view_cats', '_self')</script>";
	}
	
	}

}
?>