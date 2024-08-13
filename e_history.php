<?php
 	require_once('includes/connection.class.php');

	if (isset($_POST['btn1'])){
	
	$id = $_POST['id'];
		$last_locate = $_POST['last_locate'];
        $date_track = $_POST['date_track'];
        $status = $_POST['status'];
		$remark = $_POST['remark'];
        

	$stmt = $conn->prepare("UPDATE user_history SET last_locate=:ll, date_track=:dt, status=:sn, remark =:rm  WHERE history_id=:id");
		$stmt->bindParam(":ll", $last_locate);
		$stmt->bindParam(":dt", $date_track);
        $stmt->bindParam(":sn", $status);
        $stmt->bindParam(":rm", $remark);
		$stmt->bindParam(":id", $id);
	//$num = $res->rowCount();
	
	
	if($stmt->execute())
		{
			echo "Successfully updated";
			
			
	?>
				<script type="text/javascript">
									alert("Shipping Information has been suceesfully edited");
									window.location.href = "edit_history.php";
									</script>
	
		<?php
		}
	
	
			
						
						
						
						
					
				
	
	}
	?>