<html lang="en">
<head>
<title>Offers</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Destino project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/offers_styles.css">
<link rel="stylesheet" type="text/css" href="styles/offers_responsive.css">
</head>
<?php 
include("includes/connect.php");
@session_start();
include("includes/connect.php");
if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('../checkout.php','_self')</script>";
	
}
else{
//getting customer's id
$c = $_SESSION['customer_email'];
	$get_c = "select * from customers where customer_email='$c'";
	$run_c = mysqli_query($db, $get_c);
	$row_c = mysqli_fetch_array($run_c);
		
	$customer_id = $row_c['customer_id'];


?>
<div class="row"><h3>Your Order Details</h3></div><div style="overflow-x:auto;">
<table>
    <tr style="font-size: 14px;">
		<th>Order No.</th>
		<th>Due Amount</th>
		<th>Invoice No.</th>
		<th>Total Tours</th>
		<th>Order Date</th>
		<th>Paid/Unpaid</th>
		<th>Status</th>
		</tr>
				<?php
				
				$get_orders = "select * from customer_orders where customer_id='$customer_id'";
				$run_orders = mysqli_query($con, $get_orders);
				$i = 0;
				while($row_orders = mysqli_fetch_array($run_orders)){
					
					$order_id = $row_orders['order_id'];
					$due_amount = $row_orders['due_amount'];
					$invoice_no = $row_orders['invoice_no'];
					$products = $row_orders['total_products'];
					$date = $row_orders['order_date'];
					$status = $row_orders['order_status'];
					$i++;
					
					if($status=='Pending'){
						
						$status = 'Unpaid';
												
					}
					else {
						
						$status = 'Paid';
					}
					echo "<tr><td>$i</td>
							  <td>$due_amount</td>
								<td>$invoice_no</td> 
								<td>$products</td> 
								<td>$date</td> 
								<td>$status</td>
								<td> <a href='confirm.php?order_id=$order_id'>Confirm if Paid</a></td>
							</tr>";
				}
				
				
				?>
				
				
				
				</table>
					</div>
				
</div><?php } ?>