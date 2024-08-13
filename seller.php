<?php
 	require_once('includes/connection.class.php');

	if (isset($_POST['btn1'])){
	
	$id = $_POST['id'];
		$seller_name = $_POST['seller_name'];
		$seller_address = $_POST['seller_address'];
		$service_type = $_POST['service_type'];
		$origin = $_POST['origin'];
		$destination = $_POST['destination'];
		
	
		
		$stmt = $conn->prepare("UPDATE sellers_tb SET seller_name=:bn, seller_address=:ba, service_type=:st, origin =:org, destination =:dt WHERE seller_id=:id");
		$stmt->bindParam(":bn", $seller_name);
		$stmt->bindParam(":ba", $seller_address);
		$stmt->bindParam(":st", $service_type);
		$stmt->bindParam(":org", $origin);
		$stmt->bindParam(":dt", $destination);
		
			$stmt->bindParam(":id", $id);
	//$num = $res->rowCount();
	
	
	if($stmt->execute())
		{
			echo "Successfully updated";
			
			
	?>
				<script type="text/javascript">
									alert("Seller Information has been updated");
									window.location.href = "edit_seller.php";
									</script>
	
		<?php
		}
	
	
			
						
						
						
						
					
				
	
	}
	?>