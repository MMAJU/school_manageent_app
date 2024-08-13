<?php
 	require_once('includes/connection.class.php');

	if (isset($_POST['btn1'])){
	
	$id = $_POST['id'];
		$buyer_name = $_POST['buyer_name'];
		$buyer_address = $_POST['buyer_address'];
		$status = $_POST['status'];
	
	$stmt = $conn->prepare("UPDATE buyer_tb SET buyer_name=:bn, buyer_address=:ba, status=:sn  WHERE buyer_id=:id");
		$stmt->bindParam(":bn", $buyer_name);
		$stmt->bindParam(":ba", $buyer_address);
		$stmt->bindParam(":sn", $status);
		$stmt->bindParam(":id", $id);
	//$num = $res->rowCount();
	
	
	if($stmt->execute())
		{
			echo "Successfully updated";
			
			
	?>
				<script type="text/javascript">
									alert("Buyer Information has been updated");
									window.location.href = "edit_buyer.php";
									</script>
	
		<?php
		}
	
	
			
						
						
						
						
					
				
	
	}
	?>