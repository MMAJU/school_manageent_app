<?php 
	require_once("includes/connection.class.php");
require_once("includes/session.php");
	  

$user_query  = $conn->query("select * from admin_table where admin_id = '$session_id'");
$user_row = $user_query->fetch((PDO::FETCH_ASSOC));
$user_name  = $user_row['admin_name'];


		
		
		
		
?>


<!DOCTYPE html>
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
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="assets/css/login.css" />
    <link rel="stylesheet" href="assets/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
   <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >

   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <img src="assets/img/logo.png" id="logoimg" alt=" Logo" />
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
                 <form action="" method = "Post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your new  username and password
                </p>
                <input type="text" name = "user_name" placeholder="Enter new user name" class="form-control"  required/>
                <input type="password" name="password" placeholder="Enter new password" class="form-control" required/>
                <button class="btn text-muted text-center btn-danger" name = "btn" type="submit">Change Password</button>
            </form>
        </div>
        
		
		<?php 
											if(isset($_POST['btn'])){
												
												$user_name = $_POST['user_name'];
											$password = $_POST['password'];
											
												$stmt = $conn->query("UPDATE admin_table SET admin_name = '$user_name', admin_password = '$password' WHERE admin_id = '$session_id';");
		
													$num_rows = $stmt->rowCount();
													
													if($num_rows  > 0){
										//$_SESSION['hospital_name'] = $hospitalName;	
								 ?>
                                	<script type="text/javascript">
									alert("Login Details Updated");
									window.location.href = "index.html";
								
									</script>>
								
											
                               <?php 
						
                                            
								}else{
										echo "An Error Occurred";
									}
												
											}
												
												?>
        
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Change Password</a></li>
            
             <li><a class="text-muted" href="dashboard.php" >Go back to Dashboard</a></li>
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="assets/plugins/jquery-2.0.3.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.js"></script>
   <script src="assets/js/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->

</body>
    <!-- END BODY -->
</html>
