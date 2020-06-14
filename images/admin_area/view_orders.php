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
<title>View Orders</title>
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
if(isset($_GET['view_orders'])){
?>
	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col"></br>
					<h3>View All Orders!</h3><br>
					<div style="overflow-x:auto;">
					<table>
    <tr style="font-size: 14px;">
      <th>Order No</th>
      <th>Customer</th>
      <th>Invoice No.</th>
	  <th>Post ID</th>
      <th>Status</th>
      <th>Delete</th>
    </tr>
	
	<?php 
	include("includes/connect.php");
	$i=0;
	$get_orders = "select * from pending_orders";
	$run_orders = mysqli_query($con, $get_orders);
	while($row_orders = mysqli_fetch_array($run_orders)){
		
		$order_id = $row_orders['order_id'];
		$c_id = $row_orders['customer_id'];
		$invoice = $row_orders['invoice_no'];
		$p_id = $row_orders['product_id'];
		$status = $row_orders['order_status'];
		$i++;
		
	?>
    <tr>
	<td><?php echo $i; ?></td>
	<td><?php 
	$get_customer = "select * from customers where customer_id='$c_id'";
	$run_customer = mysqli_query($con, $get_customer);
	$row_customer = mysqli_fetch_array($run_customer);
	$customer_email = $row_customer['customer_email'];
	echo $customer_email; ?></td>
	<td><?php echo $invoice; ?></td>
	<td><?php echo $p_id; ?></td>
	<td><?php
if($status=='Pending'){
	
	echo $status = 'Pending';
}	
	else {
		echo $status = 'Complete'; }?></td>	
	<td> <a href = "delete_order.php?delete_order=<?php echo $order_id; ?>"> Delete </a></td>
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