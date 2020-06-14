<!DOCTYPE html>
<?php
include("includes/connect.php");
@session_start();
if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{
if(isset($_GET['edit_image'])){
	
	$edit_id = $_GET['edit_image'];
	$get_edit = "select post_images, post_id from post where post_id = '$edit_id'";
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['post_id'];
	
	$p_image = $row_edit['post_images'];
	
}
	
 ?>
<html lang="en">
<head>
<title>Edit Post</title>
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
					<h3>Update Picture Here:</h3><br>
					<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>Upload image:</label>
						<input type="file" name ="images" class="form-control" required><img src = "../images1/<?php echo $p_image; ?>" width="80" height = "80">
					</div>
					<button type="button" name="no" class="btn btn-primary" ><a href="index.php?view_posts" style="color:white">Cancel</a></button>
						<input type="submit" name= "update_product" class="btn btn-primary" value="Upload Image"> 
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

if(isset($_POST['update_product'])){
	$images_name = $_FILES['images']['name'];
	$images_type = $_FILES['images']['type'];
	$images_size = $_FILES['images']['size'];
	$images_tmp = $_FILES['images']['tmp_name'];
	
	
	if($images_name == '' ){
		echo "<script>alert('Please select an image!')</script>";
		
	}
	if($images_type == "image/jpeg" or $images_type == "image/png" or $images_type == "image/gif"){
		if($images_size <= 200000 && $images_size >= 100000){
			move_uploaded_file($images_tmp, "../images1/$images_name");
			
		}
		else {
			
			echo "<script>alert('Please upload image upto 200kb only.')</script>";
			exit();
		}
	}
	else{
	echo "<script>alert('Image type is invalid!')</script>";
	}
	$update_post = "update post set post_images='$images_name' where post_id='$update_id'";
	if(mysqli_query($con, $update_post)){
		
		echo "<script>alert('Image updated successfully!')</script>";
		echo "<script>window.open('index.php?view_posts', '_self')</script>";
	}
	
	}

}
?>