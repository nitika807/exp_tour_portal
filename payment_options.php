<!DOCTYPE html>
<?php
include("includes/connect.php");
 if(!isset($_SESSION['customer_email'])){
	@session_start();
	echo"<script>window.open('checkout.php','_self')</script>";
	
}
else{
?>
<html lang="en">
<head>
<title>Pay Now</title>
</head>
<body>
<?php 
include("includes/connect.php");
$ip = getUserIpAddr();

$get_customer = "select * from customers where customer_ip = '$ip'";

$run_customer = mysqli_query($con, $get_customer);

$customer = mysqli_fetch_array($run_customer);

$customer_id = $customer['customer_id'];
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

?>
<div style="text-align:center;">
<h1>Pay Now.... </h1><b></br>
<div style="display: inline-block">
<form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_top">
<!--Identify your business so that you can collect the payments. -->
<input type="hidden" name="business" value="businesseg@gmail.com">
<!--specify a buy now button -->
<input type="hidden" name="cmd" value="_xclick">
<!--Specify details about the item that buyers will purchase.-->
<!--<input 	type="hidden" name="item_name" value="< ?php echo $product_name; ?>">-->
<input type="hidden" name="amount" value="<?php echo $total; ?>">
<input type="hidden" name="currency_code" value="AUD">
<!-- return and cancel_return URLs-->
<input type="hidden" name="return" value="http://www.qxadia.com.au/customer/my_account.php"/>
<input type="hidden" name="cancel_return" value="http://www.qxadia.com.au/checkout.php"/>
<!-- Display the payment button-->
<input type="image" src="https://www.paypalobjects.com/en_AU/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal – The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_AU/i/scr/pixel.gif" width="1" height="1">
		</form></br> <h3> <b> or </b> </h3>
</div>

<a href="order.php?c_id=<?php echo $customer_id; ?>"> <h3>Offline Payment </h3></br></a></b>
In case of Offline payment selection, please check your email or account to find the Invoice No. for your order.
</div>
</body>
</html>

<?php } ?>