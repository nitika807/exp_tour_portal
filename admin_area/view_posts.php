<!DOCTYPE html>
<?php
include("includes/connect.php");

if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{
 ?>
<html lang="en">
<head>
<title>View Post</title>
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
<?php 
if(isset($_GET['view_posts'])){
?>
	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col"></br>
					<h3>View All Posts!</h3><br>
					<div style="overflow-x:auto;">
					<table>
    <tr style="font-size: 14px;">
      <th>Product Number</th>
      <th>Title</th>
      <th>Change Image</th>
      <th>Price</th>
      <th>Total Sold</th>
      <th>Status</th>
      <th>Edit Content</th>
      <th>Delete</th>
    </tr>
	
	<?php 
	include("includes/connect.php");
	$i=0;
	$get_post = "select * from post";
	$run_post = mysqli_query($con, $get_post);
	while($row_post = mysqli_fetch_array($run_post)){
		
		$p_id = $row_post['post_id'];
		$p_title = $row_post['post_title'];
		$p_img = $row_post['post_images'];
		$p_price = $row_post['post_price'];
		$status = $row_post['status'];
		$i++;
		
	?>
    <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $p_title; ?></td>
	<td><a href="index.php?edit_image=<?php echo $p_id; ?>"><img src="../images1/<?php echo $p_img; ?>" width="50" height="50" alt="Image cannot be displayed"></a></td>
	<td><?php echo $p_price; ?></td>
	<td>
	<?php 
	$get_sold = "select * from pending_orders where product_id = '$p_id'";
	$run_sold = mysqli_query($con,$get_sold);
	$count = mysqli_num_rows($run_sold);
	echo $count;
	?>
	
	</td>
	<td>
	<?php echo $status; ?> </td>
	<td> <a href="index.php?edit_post=<?php echo $p_id; ?>"> Edit</a></td>
	<td> <a href = "delete_post.php?delete_post=<?php echo $p_id; ?>"> Delete </a></td>
	</tr>
<?php } ?>
  </table>
<?php }



?>
</div>
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
<?php } ?>