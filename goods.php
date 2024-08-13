<?php
 	require_once('includes/connection.class.php');

	if (isset($_POST['btn1'])){
	
	$id = $_POST['id'];
		$track = $_POST['track'];
		$qty = $_POST['qty'];
		$desc = $_POST['desc'];
		$weight = $_POST['weight'];
	
	$res = $conn->query("insert into goods_tb(track_pin, qty, description, weight) values('$track', '$qty',  '$desc', '$weight' )"); ; 
	$num = $res->rowCount();
	
			if($num > 0){
						
						?>
						<script type="text/javascript">
									alert("Goods Has Been For Your Client");
									window.location.href = "add_goods.php";
									</script>
						
			<?php			
				}
	
	}
	?>