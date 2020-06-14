<?php
include("includes/connect.php");
@session_start();
if(!isset($_SESSION['admin_email'])){
	
	echo"<script>window.open('login.php','_self')</script>";
	
}
else{
if(isset($_GET['delete_cat'])){
	
	$delete_id = $_GET['delete_cat'];
	$delete_post = "delete from categories where cat_id = '$delete_id'";
	$run_delete = mysqli_query($con, $delete_post);
	
	if($run_delete){
		echo "<script>alert('One Post has been deleted')</script>";
		echo "<script>window.open('index.php?view_cats','_self') </script>";
	}
}
}
	
 ?>