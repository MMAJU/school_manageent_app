<?php
 require_once('includes/connection.class.php');



	$id = $_GET['id'];	
	$stmt=$conn->prepare("DELETE  FROM user_history where history_id=:id");
	$stmt->execute(array(':id'=>$id));	
    header("Location:edit_history.php");
?>