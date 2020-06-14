<?php
session_start();
include("includes/connect.php");
if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('../checkout.php','_self')</script>";
	
}
else{
if(isset($_GET['order_id'])){
	
	$order_id = $_GET['order_id'];
}
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>
<div class="row">
			<div class="col">
				<form action="confirm.php?update_id=<?php echo $order_id; ?>" method="post" enctype="multipart/from-data">
					<div class="div-table" style="margin:auto; top:50px;">
						<div class="div-table-row" style="text-align:center">
						<b>Please Confirm Your Payment</b></div>
						<div class="div-table-row" style="text-align:right">						
						<div class="div-table-col"><b>Invoice No:</b></div>
						<div class="div-table-col"><input type="text" name="invoice_no"/></div></div>
						<div class="div-table-row" style="text-align:right">						
						<div class="div-table-col"><b>Amount Paid:</b></div>
						<div class="div-table-col"><input type="number" name="amount"/></div></div>
						<div class="div-table-row" style="text-align:right">						
						<div class="div-table-col"><b>Select Payment Mode:</b></div>
						<div class="div-table-col"> <select name="payment_method"/>
						<option> Select Payment </option>
						<option> Bank Transfer </option>
						<option> Western Union </option>
						<option>Paypal </option>
						</select></div></div>
						<div class="div-table-row" style="text-align:right">						
						<div class="div-table-col"><b>Transaction/Reference ID:</b></div>
						<div class="div-table-col"><input type="text" name="tr"/></div></div>
						<div class="div-table-row" style="text-align:right">						
						<div class="div-table-col"><b>Payment Date:</b></div>
						<div class="div-table-col"><input type="date" name="date"/></div></div>
						<div class="div-table-row" style="text-align:center">						
						<input type="submit" name="confirm" value="Confirm"/></div>					
						</div>
					</div>
				</form>
			</div>
</div>

<?php
if(isset($_POST['confirm']))
{
	$update_id = $_GET['update_id'];
	$invoice = $_POST['invoice_no'];
	$amount = $_POST['amount'];
	$payment_method = $_POST['payment_method'];
	$ref_no = $_POST['tr'];
	$date = date('Y-m-d', strtotime($_POST['date']));
	$complete = 'Complete';
	$insert_payment = "insert into payments (invoice_no, amount, payment_mode, ref_no, payment_date)
	values ('$invoice','$amount','$payment_method','$ref_no','$date')";
	$run_payment = mysqli_query($con, $insert_payment);
	$update_order = "UPDATE customer_orders set order_status='$complete' where order_id='$update_id'";
	$run_order = mysqli_query($con, $update_order);
	$update_pending_orders = "update pending_orders set order_status='$complete' where order_id='$update_id'";
	$run_pending_orders = mysqli_query($con, $update_pending_orders);
	
	if($run_payment){
		echo "<h3></br></br>Payment received, your order will be confirmed within 24 hours</h3>";
		
	}
	
	
	
}

}
?>
