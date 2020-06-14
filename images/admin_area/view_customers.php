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
<title>View Customers</title>
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
if(isset($_GET['view_customers'])){
?>
	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col"></br>
					<h3>View All Customers!</h3><br>
					<div style="overflow-x:auto;">
					<table>
    <tr style="font-size: 14px;">
      <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
	  <th>Contact No.</th>
      <th>Country</th>
	  <th>Image</th>
      <th>Delete</th>
    </tr>
	
	<?php 
	include("includes/connect.php");
	$i=0;
	$get_c = "select * from customers";
	$run_c = mysqli_query($con, $get_c);
	while($row_c = mysqli_fetch_array($run_c)){
		
		$c_id = $row_c['customer_id'];
		$c_fname = $row_c['customer_fname'];
		$c_lname = $row_c['customer_lname'];
		$c_email = $row_c['customer_email'];
		$c_cn_code = $row_c['customer_c_code'];
		$c_contact = $row_c['customer_contact'];
		$c_country = $row_c['customer_country'];
		$c_img = $row_c['customer_image'];

		$i++;
		
	?>
    <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $c_fname.'&nbsp;'.$c_lname; ?></td>
	<td><?php echo $c_email; ?></td>
	<td><?php echo '+'.$c_cn_code.'-'.$c_contact; ?></td>
	<td><?php echo $c_country; ?></td>	
	<td><img src="../images1/<?php echo $c_img; ?>" width="60" height="60" alt="Image cannot be displayed"></td>
	<td> <a href = "delete_c.php?delete_c=<?php echo $c_id; ?>"> Delete </a></td>
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