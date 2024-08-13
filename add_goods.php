<?php 
	require_once("includes/connection.class.php");
require_once("includes/session.php");
	  

$user_query  = $conn->query("select * from admin_table where admin_id = '$session_id'");
$user_row = $user_query->fetch((PDO::FETCH_ASSOC));
$user_name  = $user_row['admin_name'];

?>
﻿<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

 <!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title>Cwavelink | Dashboard</title>
     <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
     <!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <![endif]-->
    <!-- GLOBAL STYLES -->
    <!-- GLOBAL STYLES -->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/main.css" />
    <link rel="stylesheet" href="assets/css/theme.css" />
    <link rel="stylesheet" href="assets/css/MoneAdmin.css" />
    <link rel="stylesheet" href="assets/plugins/Font-Awesome/css/font-awesome.css" />
    <!--END GLOBAL STYLES -->

    <!-- PAGE LEVEL STYLES -->
    <link href="assets/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
    <!-- END PAGE LEVEL  STYLES -->
       <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
     <!-- END HEAD -->
     <!-- BEGIN BODY -->
<body class="padTop53 " >

     <!-- MAIN WRAPPER -->
    <div id="wrap">


         <!-- HEADER SECTION -->
        <div id="top">

           <nav class="navbar navbar-inverse navbar-fixed-top " style="padding-top: 10px;">
                <a data-original-title="Show/Hide Menu" data-placement="bottom" data-tooltip="tooltip" class="accordion-toggle btn btn-primary btn-sm visible-xs" data-toggle="collapse" href="#menu" id="menu-toggle">
                    <i class="icon-align-justify"></i>
                </a>
                <!-- LOGO SECTION -->
                <header class="navbar-header">

                    <a href="index.html" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="" />
                        
                        </a>
                </header>
                <!-- END LOGO SECTION -->
                <ul class="nav navbar-top-links navbar-right">

                    <!-- MESSAGES SECTION -->
                   
                    <!--END MESSAGES SECTION -->

                    <!--TASK SECTION -->
                   
                    <!--END TASK SECTION -->

                    <!--ALERTS SECTION -->
                   
                    <!-- END ALERTS SECTION -->

                    <!--ADMIN SETTINGS SECTIONS -->

                    <li class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="icon-user "></i>&nbsp; <i class="icon-chevron-down "></i>
                        </a>

                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#"><i class="icon-user"></i> Register </a>
                            </li>
                            <li><a href="#"><i class="icon-gear"></i> Change Password </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="login.html"><i class="icon-signout"></i> Logout </a>
                            </li>
                        </ul>

                    </li>
                    <!--END ADMIN SETTINGS -->
                </ul>

            </nav>

        </div>
        <!-- END HEADER SECTION -->



        <!-- MENU SECTION -->
       <div id="left">
            <div class="media user-media well-small">
                <a class="user-link" href="#">
                    <img class="media-object img-thumbnail user-img" alt="User Picture" src="assets/img/user.gif" />
                </a>
                <br />
                <div class="media-body">
                    <h5 class="media-heading"> <?php echo $user_name; ?></h5>
                    <ul class="list-unstyled user-info">
                        
                        <li>
                             <a class="btn btn-success btn-xs btn-circle" style="width: 10px;height: 12px;"></a> Online
                           
                        </li>
                       
                    </ul>
                </div>
                <br />
            </div>

            <ul id="menu" class="collapse">

                
                <li class="panel active">
                    <a href=" dashboard.php" >
                        <i class="icon-table"></i> Dashboard
	   
                       
                    </a>                   
                </li>



                <li class="panel ">
                    <a href="#" data-parent="#menu" data-toggle="collapse" class="accordion-toggle" data-target="#component-nav">
                        <i class="icon-tasks"> </i> MANAGE TRACKING     
	   
                        <span class="pull-right">
                          <i class="icon-angle-left"></i>
                        </span>
                      
                    </a>
                    <ul class="collapse" id="component-nav">
                       
                        <li class=""><a href="new_tracking.php"><i class="icon-angle-right"></i> Create Initial Tracking </a></li>
                         <li class=""><a href="update_client_history.php"><i class="icon-angle-right"></i> Update Tracking History </a></li>
						<li class=""><a href="add_goods.php"><i class="icon-angle-right"></i> Add More Good for Client </a></li>
                        <li class=""><a href="edit_buyer.php"><i class="icon-angle-right"></i> Edit Buyer Details </a></li>
                        <li class=""><a href="edit_seller.php"><i class="icon-angle-right"></i> Edit Seller Details </a></li>
                        <li class=""><a href="edit_history.php"><i class="icon-angle-right"></i> Edit Tracking History </a></li>
                       
                    </ul>
                </li>
               
                
               

               <li><a href="view_quotes.php"><i class="icon-table"></i> Quotations </a></li>


                <li><a href="register.php"><i class="icon-user"></i> Register </a></li>
                <li><a href="change_password.php"><i class="icon-table"></i> Change Password </a></li>
                
               
                <li><a href="logout.php"><i class="icon-signout"></i> Logout </a></li>

            </ul>

        </div>
        <!--END MENU SECTION -->


        <!--PAGE CONTENT -->
        <div id="content">

            <div class="inner">
                <div class="row">
                    <div class="col-lg-12">


                        <h2> Add More Good For Client </h2>



                    </div>
                </div>

                <hr />


                <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Click on the add link to add more shipment goods for a client.
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
										<tr>
										<th>Customer ID</th>
											<th>First Name</th>
												<th>Last Name</th>
													<th>Track Pin</th>
														<th>Status</th>
       
														<th>Add More Goods</th>
		
      
															</tr>
															</thead>
                                    <tbody>
									
											 <?php
require_once('includes/connection.class.php');
        
       $stmt = $conn->prepare("SELECT * FROM buyer_tb");
        $stmt->execute();
		while($row = $stmt->fetch(PDO::FETCH_ASSOC))
		{
			$id = $row['buyer_id'];
			?>
			<tr>
			
			
			
			<td><?php echo $id; ?></td>
			<td><?php echo $row['buyer_name']; ?></td>
			<td><?php echo $row['buyer_address']; ?></td>
			<td><?php echo $row['track_pin']; ?></td>
			<td><?php echo $row['status']; ?></td>
			
			
			
			<td align="center">
			<a id="<?php echo $id; ?>" href="#add_goods<?php echo $id; ?>" data-toggle="modal" class="btn btn-success" title = "add goods"> <span class=" glyphicon glyphicon-edit"></span> 
			Add Goods
            </a>
			
			<?php include('modal_add_goods.php'); ?>
			</td>
			
		
			
			
			
			<?php
		}
		?>
                                          
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                    </div>
                </div>
            </div>
            
           
           

            </div>




        </div>
       <!--END PAGE CONTENT -->


    </div>

     <!--END MAIN WRAPPER -->

   <!-- FOOTER -->
    <div id="footer">
        <p>&copy;  binarytheme &nbsp;2014 &nbsp;</p>
    </div>
    <!--END FOOTER -->
     <!-- GLOBAL SCRIPTS -->
    <script src="assets/plugins/jquery-2.0.3.min.js"></script>
     <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/plugins/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!-- END GLOBAL SCRIPTS -->
        <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dataTables/jquery.dataTables.js"></script>
    <script src="assets/plugins/dataTables/dataTables.bootstrap.js"></script>
     <script>
         $(document).ready(function () {
             $('#dataTables-example').dataTable();
         });
    </script>
     <!-- END PAGE LEVEL SCRIPTS -->
</body>
     <!-- END BODY -->
</html>
