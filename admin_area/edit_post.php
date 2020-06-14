<!DOCTYPE html>
<?php
include("includes/connect.php");
@session_start();
if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{

if(isset($_GET['edit_post'])){
	
	$edit_id = $_GET['edit_post'];
	$get_edit = "select * from post where post_id = '$edit_id'";
	$run_edit = mysqli_query($con, $get_edit);
	$row_edit = mysqli_fetch_array($run_edit);
	
	$update_id = $row_edit['post_id'];
	
	$p_title = $row_edit['post_title'];
	$cat_id = $row_edit['cat_id'];
	$p_price = $row_edit['post_price'];
	$p_desc = $row_edit['post_desc'];
	$p_people = $row_edit['post_people'];
	$p_hotel = $row_edit['post_hotel'];
	$p_inclusion = $row_edit['post_include'];
	$p_exclusion = $row_edit['post_ninclude'];	
	$p_keywords = $row_edit['post_keywords'];
	$p_sdate = $row_edit['sdate'];
	$p_edate = $row_edit['edate'];	
}

	$get_cat = "select * from categories where cat_id='$cat_id'";
	$run_cat = mysqli_query($con, $get_cat);
	$cat_row = mysqli_fetch_array($run_cat);
	$cat_edit_title = $cat_row['cat_title'];
	
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
					<h3>Update or Edit Post Here:</h3><br>
					<form method="post" action="" enctype="multipart/form-data">
					<div class="form-group">
						<label>Select Category:</label>
						<select id="category" name ="category" class="form-control" >
						<option value="<?php echo $cat_id; ?>"selected disabled hidden><?php echo $cat_edit_title; ?></option>
						<?php
								$get_cats = "select * from categories";
								$run_cats = mysqli_query($con, $get_cats);
								while ($row_cats = mysqli_fetch_array($run_cats)){
									$cat_id = $row_cats['cat_id'];
									$cat_title = $row_cats['cat_title'];
									echo "<option value='$cat_id'>$cat_title</option>";
								}
								?>
						</select> 
					</div>
					<div class="form-group">
						<label>Post Title:</label>
						<input type="text" name= "title" class="form-control" placeholder="Enter tour title" value="<?php echo $p_title; ?>" required>
						
					</div>
				
					<div class="form-group">
						<label>Post Description:</label>
						<textarea class="form-control" name="description" rows="5" placeholder="Enter details about tour"  required><?php echo $p_desc; ?></textarea>
					</div>
					<div class="form-group">
					<div class="row">
					
					<div class="col"><label>Select Start Date: </label><input type="date" name="sdate" id="start" min="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Start Date" value="<?php echo $p_sdate; ?>"required></div>
					<div class="col"><label>Select End Date: </label><input type="date" name="edate" id="end" class="form-control" placeholder="End Date" value="<?php echo $p_edate; ?>" required></div>
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input type="number" name ="price" min="1" step="any" name= "price" class="form-control" placeholder="Enter Price" value="<?php echo $p_price; ?>"required>
					</div>
					<div class="form-group">
						<div class="row">
						<div class="col"><label>Select number of people: </label><input type="number" min="1" step="1" name= "people" class="form-control" placeholder="Enter persons"  value="<?php echo $p_people; ?>"required></div>
						<div class="col"><label>Hotel rating:</label><input type="number" min="1" max="5" name= "hotel_rating" class="form-control" placeholder="Enter hotel rating"  value="<?php echo $p_hotel; ?>"required></div>
						</div>
					</div>
					
					<div class="form-group">
						<label>Included in package:</label>
						<textarea class="form-control" name="inclusion" placeholder="What does price include?" required><?php echo $p_inclusion; ?></textarea>
					</div>
					<div class="form-group">
						<label>Not Included in package:</label>
						<textarea class="form-control" name="exclusion" placeholder="What is not included in price?" required><?php echo $p_exclusion; ?></textarea>
						</div>
					<div class="form-group">
						<label>Search tags for posts:<br><small>(Enter tags seperated by comma)</small></label>
						<input type="text" class="form-control" name="keywords" placeholder="For example: adventure, sports, spiritual etc...." value="<?php echo $p_keywords; ?>"required>
					</div>
					<div class="form-group">
					<button type="button" name="no" class="btn btn-primary" ><a href="index.php?view_posts" style="color:white">Cancel </a></button>
						<input type="submit" name= "update_product" class="btn btn-primary" value="Update Now"> 
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
	$title = addslashes($_POST['title']);
	$description = addslashes($_POST['description']);
	$price = $_POST['price'];
	$people = $_POST['people'];
	$hotel_rating = $_POST['hotel_rating'];
	$inclusion = addslashes($_POST['inclusion']);
	$exclusion = addslashes($_POST['exclusion']);
	$date = date('Y-m-d');
	$category = $_POST['category'];
	$keywords = addslashes($_POST['keywords']);
	$sdate = date('Y-m-d', strtotime($_POST['sdate']));
	$edate = date('Y-m-d', strtotime($_POST['edate']));
	$status =  'on';
	
	
	if($title == '' or $category == '' or $description == '' or $price == '' or $people =='' or $hotel_rating=='' or $inclusion =='' or $exclusion == ''){
		echo "<script>alert('Please fill all fields!')</script>";
		
	}

	$update_post = "update post set post_title='$title', post_desc='$description', post_price='$price', post_people= '$people', post_hotel='$hotel_rating',
	post_include='$inclusion', post_ninclude='$exclusion', cat_id='$category', post_keywords='$keywords', sdate='$sdate', edate='$edate', status='$status' where post_id='$update_id'";
	if(mysqli_query($con, $update_post)){
		
		echo "<script>alert('Post updated successfully!')</script>";
		echo "<script>window.open('index.php?view_posts', '_self')</script>";
	}
	
	}

?>
<script>
var start = document.getElementById('start');
var end = document.getElementById('end');

start.addEventListener('change', function() {
    if (start.value)
        end.min = start.value;
}, false);
end.addEventLiseter('change', function() {
    if (end.value)
        start.max = end.value;
}, false);
</script>
<?php } ?>