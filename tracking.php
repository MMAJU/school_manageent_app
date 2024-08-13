<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php 
		require_once("admin/includes/connection.class.php");
?>
<!DOCTYPE html>
<html>
<head>
<title>Global Express Delivery : Tracking</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shipping, transportation, tracking of goods" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstarp-css -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<!--// bootstarp-css -->
<!-- css -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/style1.css" type="text/css" media="all" />
<!--// css -->
<script src="js/jquery-1.11.1.min.js"></script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,800,700,600' rel='stylesheet' type='text/css'>
<!--/fonts-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script>
	 new WOW().init();
</script>
<!--start-smoth-scrolling-->
		<script type="text/javascript" src="js/move-top.js"></script>
		<script type="text/javascript" src="js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
		</script>
<!--start-smoth-scrolling-->

</head>
<body style="">
	<!-- banner -->
	<div id="home" class="banner a-banner">
		<!-- container -->
		<div class="container">
			<div class="header">
				<div class="head-logo">
					<a href="index.html"><h2>Cargo Express Limited</h2></a>
				</div>
				<div class="top-nav">
					<span class="menu"><img src="images/menu.png" alt=""></span>
					<ul class="nav1">
						<li class="hvr-sweep-to-bottom"><a href="index.html">Home<i><img src="images/nav-but1.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="about.html">About<i><img src="images/nav-but2.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom"><a href="services.html">Services<i><img src="images/nav-but3.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom active"><a href="Tracking.php">Tracking<i><img src="images/nav-but4.png" alt=""/></i></a></li>
						<li class="hvr-sweep-to-bottom "><a href="contact.html">Contact Us<i><img src="images/nav-but5.png" alt=""/></i></a></li>
						<div class="clearfix"> </div>
					</ul>
					<!-- script-for-menu -->
							 <script>
							   $( "span.menu" ).click(function() {
								 $( "ul.nav1" ).slideToggle( 300, function() {
								 // Animation complete.
								  });
								 });
							</script>
						<!-- /script-for-menu -->
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //container -->
	</div>
	<!-- //banner -->
	<!-- mail -->
	<div class="mail">
		<!-- container -->
		<div class="container">
			
			<div class="row">
            <div class="col-lg-12">
                <h4 align="center">Track Your Goods</h4>
                	<h5 align="center">IS IT NEARLY YET </span></h5>
                    
                   <p align="center">The pick-up and delivery is easy with us, and doing so Could not be simpler. Once your delivery You have booked through us, a tracking number is assigned example something like EXP-472304198 Just input This unique number into the box below and, ta-dah, you can find out exactly Where it is! 
					</p>
                
            </div>
        </div>
        
        	
            <div class="row">
            <div class="col-md-8">
                <h3>Tracking Pin:</h3>
              <form name="sentMessage"  id="contactForm" method="post" novalidate>
                    <div class="control-group form-group">
                      <div class="controls">
                            
                            <input type="text" class="form-control" name="track" id="name"  placeholder = "Please Enter Your Tracking Number">
                        <p class="help-block"></p>
                        <input type="submit" name="btn" id="btn" value="Track" class="btn btn-primary">
                        </div>
                    </div>
                  
                  
                    
                <div id="success"></div>
                  <!-- For success/fail messages -->
                </form>
            </div>
            <div class="clearfix"></div>
            <?php 
					if(isset($_POST['btn'])){
							$track = $_POST['track'];
								$sess1_query = $conn->query("select * from sellers_tb where track_pin = '{$track}' ");
								

								
$session1_row =  $sess1_query->fetch((PDO::FETCH_ASSOC));
$tracking_num = $session1_row['track_pin'];
$ship_date = $session1_row['ship_date'];
$expect_date = $session1_row['expect_date'];
$origin = $session1_row['origin'];
$destination = $session1_row['destination'];
$seller_name = $session1_row['seller_name'];
$seller_address = $session1_row['seller_address'];
$service_type = $session1_row['service_type'];
							
							$sess_query = $conn->query("select * from buyer_tb where track_pin = '{$track}' ");
							
$session_row =  $sess_query->fetch((PDO::FETCH_ASSOC));

$current_status = $session_row['status'];
$buyer_name = $session_row['buyer_name'];
$buyer_address = $session_row['buyer_address'];
$buyer_image = $session_row['image_path'];


	$sess2_query = $conn->query("select * from goods_tb where track_pin = '{$track}' ");
							
$session2_row =  $sess2_query->fetch((PDO::FETCH_ASSOC));


$weight = $session2_row['weight'];
												
													
											
						
			?>
			 <div class="col-md-12" style="background-color:#666666; color:#FFF;  border= 2px solid #ff8c00;>
            <div class="status_client">
            
            
            
            <div class="col-md-4">
            <h4>Tracking Number : <?php echo $tracking_num; ?> </h4>
            </div>
            
            <div class="col-md-4">
			<?php 
			if($current_status == 'Pickup' ){
				echo' <a href="#" class=" btn btn-info" > Current Status:</a>' .
					
			 $current_status; 
				}
				
				if($current_status == 'Processed' ){
				echo' <a href="#" class=" btn btn-info" > Current Status:</a>' .
					
			 $current_status; 
				}
				
				if($current_status == 'In Transit' ){
				echo' <a href="#" class=" btn btn-warning" > Current Status:</a> '.
					
			 $current_status; 
				}
				
				if($current_status == 'On Hold' ){
				echo' <a href="#" class=" btn btn-danger" > Current Status:</a>' .
					
			 $current_status; 
				}
				
				if($current_status == 'Delivered' ){
				echo' <a href="#" class=" btn btn-success" > Current Status:</a>' .
					
			 $current_status; 
				}
			
           ?>
            </div>
			
			
			<div class="col-md-4">
            <a href="#" class=" btn btn-info" > Expected Delivery Date:</a> <?php
					
			echo $expect_date; ?> 
            </div>
            
            <div class="clearfix"></div>
             </div>
             
             
            <hr>
            
            <div class="status_client">
              <div class="col-md-2">
            
            </div>
            
			<div class="col-md-8">
            
			<table id="example" class=" table table-bordered " style="background-color:#4470B7; color:#FFF;" cellspacing="0" width="100%">
           <thead> 
            <tr>
            <th><h4>Shipment Dates:  </h4> </th>
             <th><h4>Destination </h4> </th>
            </tr>
			 </thead>
			  <tbody>
			  <tr>
					<td>	<strong>Ship Date: </strong> <?php echo $ship_date; ?></td>
					<td><strong>Destination:</strong> <?php echo $destination; ?></td>
			   </tr>
			   <tr>
					<td><strong>Origin:</strong> <?php echo $origin; ?></td>
					<td><strong>Expected Delivery Date:</strong> <?php echo $expect_date; ?></td>
			   </tr>
			  </tbody>
		    </table>
            </div>
			
			
			
			
            
            
            
            
            <div class="clearfix"></div>
             </div>
             
             <hr>
             
             <div class="status_client">
              <div class="col-md-2">
           
			<h1> Hello </h1>
            </div>
            
			 <div class="col-md-8">
			<table id="example" class=" table table-bordered " style="background-color:#4470B7; color:#FFF;"  cellspacing="0" width="100%">
			
			<thead> 
            <tr>
            <th><h4>Shipper Details:  </h4> </th>
             <th><h4>Receiver Details </h4> </th>
            </tr>
			 </thead>
			  <tbody>
			  <tr>
					<td><strong>Name:</strong> <?php echo $seller_name; ?></td>
					<td><strong>Name:</strong> <?php echo $buyer_name; ?> <br ></td>
			   </tr>
			   <tr>
					<td><strong>Adress:</strong> <?php echo $seller_address; ?></td>
					<td><strong>Adress:</strong> <?php echo $buyer_address; ?></td>
			   </tr>
			  </tbody>
			 </table>
			 
			   
			</div>
			
			
           
            
            
               <div class="clearfix"></div>
       
             </div>
             
              <hr>
             <div class="status_client">
              <div class="col-md-2">
            
            </div>
          
            <div class="col-md-8">
            <h4>Shipment Content / Description:  </h4>
           
			<table id="example" class=" table table-bordered " style="background-color:#4470B7; color:#FFF;"  cellspacing="0" width="100%">
			 <thead> 
            <tr>
            <th>QTY </th>
             <th>Description </th>
            </tr>
			 </thead>
            <tbody>
              <?php
                    $query3 = "SELECT qty, description FROM goods_tb where track_pin = '{$track}' ";
					if($result3 = $conn->query($query3)){
												while($row2 = $result3->fetch(PDO::FETCH_ASSOC)){
						$qty = $row2['qty'];
						$description = $row2['description'];
					?>
					<tr>
             <td><?php echo $qty; ?> </td>
             <td><?php echo $description; ?> </td>
            </tr>
              <?php	
													}
												}
												
										
												?>
             </tbody>
            </table>
            </div>
            
            
            
            
            <div class="clearfix"></div>
             </div>
             
             <hr>
             
             
             <div class="status_client">
              <div class="col-md-2">
            
            </div>
            		
            <div class="col-md-8">
			<table id="example" class=" table table-bordered " style="background-color:#4470B7; color:#FFF;"  cellspacing="0" width="100%">
            <thead>  
             <tr>  
					<th><span> <h4>Shipment Facts </h4></span></th>
			 
			 </tr>
			 
			 </thead>
			 <tbody>
			    <tr><td><strong>Service Type:  </strong><?php  echo $service_type; ?></td>

						 </tr>
						 <tr>
                                        		<td> <strong>Weight:</strong> <?php echo $weight; ?> </td>
                                      			
                                       
                                       
                                        </tr>
			    </tbody>
				</table>
			 <br >
            <br >
			
            </div>
            
            
            
            <div class="clearfix"></div>
             </div>
             
            
            <hr>
     		
            <div class="status_client">
            
              <div class="col-md-2">
            
            </div>
            <div class="col-md-8">
            <h4> Shipment Travel History </h4>
            <div class=" ln_solid"></div>
			<table id="example" class=" table table-bordered table-hover" style="background-color:#4470B7;" cellspacing="0" width="100%">
                    	<thead>
                                    <tr>
                                    	  <th style="color:#FFF;"><span>Tracking No:</span></th>
                                          
                                        <th style="color:#FFF;"> <span>Last Location</span></th>
                                                      
                                        <th style="color:#FFF;"> <span>Date</span></th> 
                                        
                                        <th style="color:#FFF;"><span>Remarks</span></th> 
                                        
                                         <th style="color:#FFF;"><span>Status</span></th> 
                                         						                                
                                       </tr>
                                    </thead>
                                    <tbody>
                                     	
                                        <?php 
										
										
										
										
												
													$query1 = "SELECT * FROM user_history where trackin = '{$track}' ";
												if($result1 = $conn->query($query1)){
												while($row1 = $result1->fetch(PDO::FETCH_ASSOC)){
													
													
													
													$status = $row1['status'];
													$trackin = $row1['trackin'];
													
													$last_locate = $row1['last_locate'];
													$date_track = $row1['date_track'];
													$remark = $row1['remark'];
													$last_id = $conn->lastInsertId();
													
													?>
														
                                           <tr <?php if ($status == 'On Hold'){
											   echo 'class="danger"';
										   }
										   else if ($status == 'In Transit')
											 {
											   echo 'class="active"';
										   }else if ($status == 'Pickup')
											 {
											   echo 'class="warning"';
										   } 
												else if ($status == 'Processed')
											 {
											   echo 'class="warning"';
										   }  
											
													else if ($status == 'Delivered')
											 {
											   echo 'class="success"';
										   }  
										   ?> ><td><?php echo $trackin; ?></td> 
                                        		<td><?php echo $last_locate; ?> </td>
                                      			<td><?php echo $date_track; ?></td>
                                               <td> <?php echo $remark; ?></td>
                                               <td> <?php echo $status; ?></td>
                                       
                                       
                                        </tr>
                                                <?php	
													}
												}
												
										
												?>	
										
                                    </tbody>
                    </table>
            </div>
            
            
            
            <div class="clearfix"></div>
             </div>
             
              <hr>
            
     
     
     
        <?php 
									
					}
		?>
        </div>
		 </div>
		</div>
		<!-- //container -->
	</div>
	<!-- //mail -->
	<!-- footer -->
	<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left  wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="services.html">Services</a></li>
					<li><a href="tracking.php">Tracking</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
				<form>
					<input type="text" placeholder="Email" required>
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="col-md-3 footer-middle wow bounceIn animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<h3>Address</h3>
				<div class="address">
					<p>756 gt globel Place,
						<span>CD-Road,M 07 435.</span>
					</p>
				</div>
			
			</div>
			<div class="col-md-3 footer-right  wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<a href="#"><h2>Cargo Express Limited</h2></a>
				<p>We run both Domestic and International Delivery</p>
			</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //container -->
	</div>
	<!-- //footer -->
	<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left wow fadeInLeft animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<p>  Cargo Express Limited 2018</p>
			</div>
			<div class="copyright-right wow fadeInRight animated" data-wow-delay="0.4s" style="visibility: visible; -webkit-animation-delay: 0.4s;">
				<ul>
					<li><a href="#" >Partner with </a></li>
					<li><img src="images/dhl_logo.png" alt=""/></li>
					<li><img src="images/fedex_logo_5031.gif" alt=""/></li>
					
				</ul>
			</div>
			<div class="clearfix"> </div>
			<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
		<a href="#home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

		</div>
		<!-- //container -->
	</div>
</body>
</html>