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
					<h3>Insert New Post Here!</h3><br>
					<form method="post" action="insert_post.php" enctype="multipart/form-data">
					<div class="form-group">
						<label>Select Category:</label>
						<select id="category" name ="category" class="form-control" required="required">
						<option value="" selected disabled hidden>Select Category</option>
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
						<input type="text" name= "title" class="form-control" placeholder="Enter tour title" required>
						
					</div>
				
					<div class="form-group">
						<label>Post Description:</label>
						<textarea class="form-control" name="description" rows="5" value="<?php echo isset($_POST["description"]) ? $_POST["description"] : ''; ?>"placeholder="Enter details about tour"  value= required></textarea>
					</div>
					<div class="form-group">
					<div class="row">
					
					<div class="col"><label>Select Start Date: </label><input type="date" name="sdate" id="start" min="<?php echo date('Y-m-d'); ?>" class="form-control" placeholder="Start Date" required></div>
					<div class="col"><label>Select End Date: </label><input type="date" name="edate" id="end" class="form-control" placeholder="End Date" required></div>
					</div>
					<div class="form-group">
						<label>Price:</label>
						<input type="number" name ="price" min="1" step="any" name= "price" class="form-control" placeholder="Enter Price" required>
					</div>
					<div class="form-group">
						
						<div class="row">
						<div class="col"><label>Select number of people</label><input type="number" min="1" step="1" name= "people" class="form-control" placeholder="Enter persons" required></div>
						<div class="col"><label>Hotel rating:</label><input type="number" min="1" max="5" name= "hotel_rating" class="form-control" placeholder="Enter hotel rating" required></div>
						</div>
					</div>
					<div class="form-group">
						<label>Upload images:</label>
						<input type="file" name ="images" class="form-control" required>
					</div>
					<div class="form-group">
						<label>Included in package:</label>
						<textarea class="form-control" name="inclusion" placeholder="What does price include?" required></textarea>
					</div>
					<div class="form-group">
						<label>Not Included in package:</label>
						<textarea class="form-control" name="exclusion" placeholder="What is not included in price?" required></textarea>
					</div>
					<div class="form-group">
						<label>Search tags for posts:<br><small>(Enter tags seperated by comma)</small></label>
						<input type="text" class="form-control" name="keywords" placeholder="For example: adventure, sports, spiritual etc...." required></textarea>
					</div>
					<div class="form-group">
					<button type="button" name="no" class="btn btn-primary" ><a href="index.php" style="color:white">Cancel </a></button>
					
						<input type="submit" name= "submit" class="btn btn-primary" value="Publish Now"> 
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

if(isset($_POST['submit'])){
	$title = addslashes($_POST['title']);
	$description = addslashes($_POST['description']);
	$price = $_POST['price'];
	$people = $_POST['people'];
	$hotel_rating = $_POST['hotel_rating'];
	$images_name = $_FILES['images']['name'];
	$images_type = $_FILES['images']['type'];
	$images_size = $_FILES['images']['size'];
	$images_tmp = $_FILES['images']['tmp_name'];
	$inclusion = addslashes($_POST['inclusion']);
	$exclusion = addslashes($_POST['exclusion']);
	$date = date('Y-m-d');
	$category = $_POST['category'];
	$keywords = addslashes($_POST['keywords']);
	$sdate = date('Y-m-d', strtotime($_POST['sdate']));
	$edate = date('Y-m-d', strtotime($_POST['edate']));
	$status =  'on';
	
	
	if($title == '' or $category == '' or $description == '' or $price == '' or $people =='' or $hotel_rating==''
	or $images_name == '' or $inclusion =='' or $exclusion == ''){
		echo "<script>alert('Please fill all fields!')</script>";
		
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
	exit();
	}
	$query = "insert into post(post_title, post_desc, post_price, post_people, post_hotel, post_images, post_include, post_ninclude, post_date, cat_id, post_keywords, sdate, edate, status) 
	values('$title','$description','$price','$people','$hotel_rating','$images_name', '$inclusion','$exclusion', NOW(),'$category', '$keywords','$sdate', '$edate','$status')";
	if(mysqli_query($con, $query)){
		
		echo "<script>alert('Post has been published!')</script>";
		echo "<script>window.open('index.php?insert_post', '_self')</script>";
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