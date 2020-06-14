<?php
include("includes/connect.php");
include("functions/functions.php");


//Getting Customer ID

if(isset($_GET['c_id'])){
	
	$customer_id = $_GET['c_id'];
	$c_email = "select * from customers where customer_id = '$customer_id'";
	
	$run_email = mysqli_query($con, $c_email);
	$row_customer = mysqli_fetch_array($run_email);
	$customer_email = $row_customer['customer_email'];
	$customer_name = $row_customer['customer_fname'];
	}
//Getting products price and number of items

		$ip_add= getUserIpAddr();
		
		$total=0;
		
		$sel_price = "select * from cart where ip_add='$ip_add'";
		
		$run_price = mysqli_query($con, $sel_price);
		
		$status = 'Pending';
		
		$invoice_no = mt_rand();
		$i=0;
		
		$count_pro = mysqli_num_rows($run_price);
		
		while($record = mysqli_fetch_array($run_price)){
			$pro_id = $record['t_id'];
			$pro_price = "select * from post where post_id='$pro_id'";
			$run_pro_price = mysqli_query($con, $pro_price);
			
			
			while($p_price=mysqli_fetch_array($run_pro_price)){
				
				
			$product_name = $p_price['post_title'];
				
				$product_price = array($p_price['post_price']);
				$values = array_sum($product_price);
				$total +=$values;
				$i++;
			}
			
		}	
		$insert_order = "insert into customer_orders (customer_id, due_amount, invoice_no, total_products, order_date, order_status )
		values ('$customer_id','$total','$invoice_no','$count_pro',NOW(),'$status')";
		
		$run_order = mysqli_query($con, $insert_order);
		
			
			echo "<script>alert('Order successfully submitted, Thanks!')</script>";
			echo "<script>window.open('customer/my_account.php','_self')</script>";
			
			$insert_to_pending_orders = "insert into pending_orders (customer_id, invoice_no, product_id, order_status) 
			values ('$customer_id','$invoice_no','$pro_id','$status')";
			$run_pending_order = mysqli_query($con, $insert_to_pending_orders);
			
			$empty_cart = "delete from cart where ip_add = '$ip_add'";
			$run_empty = mysqli_query($con, $empty_cart);
			
			$from = 'admin@admin.com';
			$subject = 'Order Details';
			$message = "
			<html>
			<p> Dear $customer_name,</p>
			Following is the summery of the tours booked from <b>Lexia Travel Experience Tours </b>. </p>
			
			<p> Your Order Details:</p>
			<table width='600' align='center' bgcolor='#FFCC99' border='2'>
			<tr>
			<th><b>S.No </b></th>
			<th><b>Product Name</b></th>
			<th><b>Total Price </b></th>
			<th><b>Invoice No</th>
			</tr>
			<tr>
			<td>$i</td>
			<td>$product_name</td>
			<td>$total</td>
			<td>$invoice_no</td>
			
			</tr>
			</table>
			<small> <a href='qxadia.com.au'>Click here</a> to login to your account</small>
			<h3>
			Thank You,
			Team
			</h3>
			
			
			</html>
			
			";
			mail($customer_email, $subject, $message, $from);
			
			
?>