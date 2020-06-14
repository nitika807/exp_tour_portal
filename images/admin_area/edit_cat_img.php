<!DOCTYPE html>
<?php
include("includes/connect.php");
@session_start();
if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{
if(isset($_GET['edit_cat_img'])){
	$cat_id = $_GET['edit_cat_img'];
	
	$edit_cat = "select * from categories where cat_id = '$cat_id'";
	$run_edit = mysqli_query($con, $edit_cat);
	$row_edit = mysqli_fetch_array($run_edit);
	$cat_img = $row_edit['cat_image'];
	$cat_edit_id = $row_edit['cat_id'];
	
	}

 ?>
<html lang="en">
<head>
<title>Edit Category </title>
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
					<h3>Upade Category Image Here!</h3><br>
					<form method="post" name="myForm" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>Upload image:</label>
						<input type="file" name ="image" class="form-control" required> <img src="../images2/<?php echo $cat_img; ?>" width="80" height="80">
					</div>
					<div class="form-group">
					<button type="button" name="no" class="btn btn-primary" value = "Cancel"> <a href="index.php?view_cats" style="color:white">Cancel</a></button>
						<input type="submit" name= "update_cat" class="btn btn-primary" value="Update Image"> 
					</div>

				</form>
					</div>
				</div>
			</div>
			
		</div>
	</div>
<script>
function validateForm() {
  var x = document.forms["myForm"]["image"].value;
  if (x == "") {
    alert("Image is missing!");
    return false;
  }
}
</script>

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

if(isset($_POST['update_cat'])){

	$images_name = $_FILES['image']['name'];
	$images_type = $_FILES['image']['type'];
	$images_size = $_FILES['image']['size'];
	$images_tmp = $_FILES['image']['tmp_name'];
	
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
	$query = "update categories set cat_image = '$images_name' where cat_id='$cat_edit_id'";
	if(mysqli_query($con, $query)){
		
		echo "<script>alert('Image has been uploaded successfully!')</script>";
		echo "<script>window.open('index.php?view_cats', '_self')</script>";
	}
	
	}
	
}

?>