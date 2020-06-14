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
<title>View Payment</title>
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
if(isset($_GET['view_payments'])){
?>
	<div class="offers">
		<div class="container">
			<div class="row">
				<div class="col"></br>
					<h3>View All Payment!</h3><br>
					<div style="overflow-x:auto;">
					<table>
    <tr style="font-size: 14px;">
      <th>Payment No</th>
      <th>Invoice No.</th>
      <th>Amound Paid</th>
	  <th>Payment Method</th>
      <th>Ref No.</th>
      <th>Payment Date</th>
    </tr>
	
	<?php 
	include("includes/connect.php");
	$i=0;
	$get_payments = "select * from payments";
	$run_payments = mysqli_query($con, $get_payments);
	while($row_payments = mysqli_fetch_array($run_payments)){
		
		$payment_id = $row_payments['payment_id'];
		$invoice = $row_payments['invoice_no'];
		$amount = $row_payments['amount'];
		$payment_m = $row_payments['payment_mode'];
		$ref_no = $row_payments['ref_no'];
		$date = $row_payments['payment_date'];
		$i++;
		
	?>
    <tr>
	<td><?php echo $i; ?></td>
	<td><?php echo $invoice; ?></td>
	<td><?php echo $amount; ?></td>
	<td><?php echo $payment_m; ?></td>
	
	<td><?php echo $ref_no; ?></td>	
	<td><?php echo $date; ?></td>
	</tr>
<?php } }?>
  </table>
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