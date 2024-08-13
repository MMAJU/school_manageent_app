<?php
 	require_once('includes/connection.class.php');

	if (isset($_POST['btn1'])){
	
	$id = $_POST['id'];
		$buyer_name = $_POST['buyer_name'];
		$buyer_address = $_POST['buyer_address'];
		$status = $_POST['status'];
		$remark = $_POST['remark'];
		$track  = $_POST['track'];
	
	$res = $conn->query("insert into user_history(last_locate, date_track, status, remark, trackin) values('$buyer_name', '$buyer_address', '$status', '$remark', '$track' )"); 
	$num = $res->rowCount();
	
			if($num > 0){
						
						?>
						<script type="text/javascript">
									alert("Shipment History has been updated");
									window.location.href = "update_client_history.php";
									</script>
						
			<?php			
				}
	
	}
	?>