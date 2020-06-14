<?php

$db = mysqli_connect("localhost","root","","tour_portal");
//function for getting the IP address
function getUserIpAddr(){
    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
        //ip from share internet
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
        //ip pass from proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    }else{
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    return $ip;
}

//creating the script for cart
function cart(){
	if(isset($_GET['add_cart'])){
	global $db;				
	$ip_add= getUserIpAddr();
	$t_id = $_GET['add_cart'];
	$tour_book_date = "select * from post";
	$run_booking = mysqli_query($db, $tour_book_date);
	while($record = mysqli_fetch_array($run_booking)){
		$check_pro = "select * from cart where ip_add='$ip_add' AND t_id='$t_id'";
		$run_check = mysqli_query($db,$check_pro);
		if(mysqli_num_rows($run_check)>0){
			
			echo "<script>alert('This tour is already booked.');history.go(-1);</script>";
			}
			else{
			$q = "insert into cart(t_id, ip_add) values('$t_id','$ip_add')";
			$run_q = mysqli_query($db,$q);
			echo "<script>alert('Tour Booked. Continue searching this site to book more tours..');history.go(-1);</script>";
			}
			}
			}
			}	
			
// displaying offers
		function getPost(){
			global $db;
			if(!isset($_GET['cat'])){
			$query = "select * from post order by 1 DESC LIMIT 0,4";

			$run = mysqli_query($db, $query);
				while($row = mysqli_fetch_array($run)){
					
					$post_id = $row['post_id'];
					$title = $row['post_title'];
					$type = $row['type'];
					$description = substr($row['post_desc'], 0, 300);
					$price = $row['post_price'];
					$people = $row['post_people'];
					$hotel_rating = $row['post_hotel'];
					$images = $row['post_images'];
					$inclusion = $row['post_include'];
					$exclusion = $row['post_ninclude'];
					$date = $row['post_date'];
					$sdate1 = $row['sdate'];
					$sdate = date_create($sdate1);
					$edate1 = $row['edate'];
					$edate2 = date_create($edate1);
					$edate = date_add($edate2, date_interval_create_from_date_string('1 days'));
?>		
						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src = "images1/<?php echo $images; ?>" width="500" height="400" style="width:100%; height:400px; object-fit: cover;" alt="Image cannot be displayed"></div>
							<div class="item_content">
								<div class="item_price">From $<?php echo $price;?></div>
								<div class="item_title"><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $title;?></a></div>
								<ul>
									<li><?php echo $people;?> Person</li>
									<li><?php $diff=date_diff($sdate,$edate);
										echo $diff->format("%a");?> Day(s) Tour </li>
									<li><?php echo $hotel_rating;?> Star Hotel</li>
								</ul>
								<!--<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>-->
								<div class="item_text"><?php echo $description;?>&nbsp;<a href="pages.php?id=<?php echo $post_id; ?>">..Read More</a></div>
								
								<small><b>Published On: &nbsp;</b> <?php echo $date;?></small>
								<div class="item_more_link">To book, contact us: Goutam Basak, Mobile , Email</div>
							</div>
						</div>
 <?php 
	}
	} 
		}
		//getting categories
								
								function getCats(){
								global $db;
								
								$get_cats = "select * from categories";
								$run_cats = mysqli_query($db, $get_cats);
								while ($row_cats = mysqli_fetch_array($run_cats)){
									$cat_id = $row_cats['cat_id'];
									$cat_title = $row_cats['cat_title'];
									$cat_image = $row_cats['cat_image'];
									?>
									<div class="col-lg-3 col-md-6 top_col">

					<!-- Top Destination Item -->
					<div class="top_item">
						
							<img class="top_item_image" src="images2/<?php echo $cat_image; ?>" alt="Adventure" width="100%" height="400" style="object-fit: cover;">
							
							<div class="top_item_content">
								<div class="top_item_text"><b>
								<?php echo "<span>$cat_title</span>";?>
								</div></div></b>
								<div class="middle">
						<div class="text"><a style='color:white' href = 'offers.php?cat= <?php echo $cat_id; ?>'>View Tour</a></div>
						</div>
						</div>
						</div>
						
								<?php }}				
							
								function getCatPost(){
									global $db;
								if(isset($_GET['cat'])){
									$cat_id = $_GET['cat'];
									$cat_query = "select * from post where cat_id = '$cat_id' AND sdate > NOW()";

									$cat_run = mysqli_query($db, $cat_query);
									$count = mysqli_num_rows($cat_run);
									if($count==0){
										
										echo "<h2> Tours coming soon... </h2>";
									}
									while($row = mysqli_fetch_array($cat_run)){
										
										$post_id = $row['post_id'];
										$title = $row['post_title'];
										$description = substr($row['post_desc'], 0, 300);
										$price = $row['post_price'];
										$people = $row['post_people'];
										$hotel_rating = $row['post_hotel'];
										$images = $row['post_images'];
										$inclusion = $row['post_include'];
										$exclusion = $row['post_ninclude'];
										$date = $row['post_date'];
										$sdate1 = $row['sdate'];
										$sdate = date_create($sdate1);
										$edate1 = $row['edate'];
										$edate2 = date_create($edate1);
										$edate = date_add($edate2, date_interval_create_from_date_string('1 days'));
?>		
					
											<!-- Item -->
											<div class='item clearfix rating_5'>
												<div class="item_image"><img src = "images1/<?php echo $images; ?>" style="width:100%; height:400px; object-fit: cover;" width="500" height="400" alt="Image cannot be displayed"></div>
												<div class="item_content">
													<div class="item_price">From $<?php echo $price;?></div>
													<div class="item_title"><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $title;?></a></div>
													<ul>
														<li><?php echo $people;?> Person</li>
														<li><?php $diff=date_diff($sdate,$edate);
														echo $diff->format("%a");?> Day(s) Tour </li>	
														<li><?php echo $hotel_rating;?> Star Hotel</li>
													</ul>
													<!--<div class="rating rating_5" data-rating="5">
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
														<i class="fa fa-star"></i>
													</div>-->
													<div class="item_text"><?php echo $description;?>&nbsp;<a href="pages.php?id=<?php echo $post_id; ?>">..Read More</a></div>
													
													<small><b>Published On Date: &nbsp;</b> <?php echo $date;?></small>
													<div class="item_more_link"> To book - Goutam Basak, +61 432 288 143, goutam.basak@infonity.com.au
</div>
												</div>
											</div>
<?php 
	}
		} 
			}
	//getting the number of tours booked
		function items(){
	
	if(isset($_GET['add_cart'])){
		global $db;
		$ip_add= getUserIpAddr();
		$get_items = "select * from cart where ip_add='$ip_add' ";
		$run_items = mysqli_query($db, $get_items);
		$count_items = mysqli_num_rows($run_items);
	}
	else {
		global $db;
		$ip_add= getUserIpAddr();
		$get_items = "select * from cart where ip_add='$ip_add'";
		$run_items = mysqli_query($db, $get_items);
		$count_items = mysqli_num_rows($run_items);
		
	}
		echo $count_items;
}
//getting the total price of the tours from the cart	

function total_price(){
		global $db;
		$ip_add= getUserIpAddr();
		$total=0;
		$sel_price = "select * from cart where ip_add='$ip_add'";
		$run_price = mysqli_query($db, $sel_price);
		while($record = mysqli_fetch_array($run_price)){
			$pro_id = $record['t_id'];
			$pro_price = "select * from post where post_id='$pro_id'";
			$run_pro_price = mysqli_query($db, $pro_price);
			while($p_price=mysqli_fetch_array($run_pro_price)){
				
				$product_price = array($p_price['post_price']);
				$values = array_sum($product_price);
				$total +=$values;
				
			}
			
		}
	echo "$".$total;
}		
								function search(){
									if(isset($_GET['search'])){
									global $db;
									$user_keyword = $_GET['search_input'];
									$query = "select * from post where (post_keywords like '%$user_keyword%' OR post_title like '%$user_keyword%' OR post_desc like '%$user_keyword%')";
									
									$run = mysqli_query($db, $query);
									$run_check = mysqli_num_rows($run);
									if($run_check==0){
										echo "<h2> No Tours Found.. </h2>";
									}
									else{
									while($row = mysqli_fetch_array($run)){
									
					
										$post_id = $row['post_id'];
										$title = $row['post_title'];
										$description = substr($row['post_desc'], 0, 300);
										$price = $row['post_price'];
										$people = $row['post_people'];
										$hotel_rating = $row['post_hotel'];
										$images = $row['post_images'];
										$inclusion = $row['post_include'];
										$exclusion = $row['post_ninclude'];
										$date = $row['post_date'];
										$sdate1 = $row['sdate'];
										$sdate = date_create($sdate1);
										$edate1 = $row['edate'];
										$edate2 = date_create($edate1);
										$edate = date_add($edate2, date_interval_create_from_date_string('1 days'));
?>		
						<!-- Item -->
						<div class="item clearfix rating_5">
							<div class="item_image"><img src = "images1/<?php echo $images; ?>" width="500" style="width:100%; height:400px; object-fit: cover;" height="400" alt="Image Not found"></div>
							<div class="item_content">
								<div class="item_price">From $<?php echo $price;?></div>
								<div class="item_title"><a href="pages.php?id=<?php echo $post_id; ?>"><?php echo $title;?></a></div>
								<ul>
									<li><?php echo $people;?> Person</li>
									<li><?php $diff=date_diff($sdate,$edate);
										echo $diff->format("%a");?> Day(s) Tour </li>
									<li><?php echo $hotel_rating;?> Star Hotel</li>
								</ul>
								<!--<div class="rating rating_5" data-rating="5">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>-->
								<div class="item_text"><?php echo $description;?>&nbsp;<a href="pages.php?id=<?php echo $post_id; ?>">..Read More</a></div>
								
								<small><b>Published On: &nbsp;</b> <?php echo $date;?></small>
								<div class="item_more_link"><a href="http://zigzagindia.com/tour/experience-sundarbans-3n4d-pr/">Read More</a> To book, contact us: Goutam Basak, Mobile , Email</div>
							</div>
						</div>
 <?php 
	}
	}
								}}
	?>