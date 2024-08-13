<?php
require_once('includes/connection.class.php');



		if (isset($_POST['btn'])){
								session_start();
				$admin_name = $_POST['admin_name'];
				$admin_password = $_POST['admin_password'];
				$query = "SELECT * FROM admin_table WHERE admin_name = :admin_name AND admin_password = :admin_password ";
				$res = $conn->prepare($query);
				$res->bindValue(":admin_name", $admin_name, PDO::PARAM_STR);
				$res->bindValue(":admin_password", $admin_password, PDO::PARAM_STR);
				$res->execute();
				$num_rows = $res->rowCount();
				$row = $res->fetch();
				
				if($num_rows){
				
					header("location:dashboard.php");
					$_SESSION['id']=$row['admin_id'];
					//$_SESSION['userNam'] = $firstName;
					}else{
							?>
							<script type="text/javascript">
									alert("Invalid Username and Password");
									window.location.href = "index.html";
								
					
						</script>
						<?php
						}
			}								
			
			?>
