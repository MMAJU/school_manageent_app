<?php
require_once('constant.php');
		
		try{
					$conn = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
					$conn-> setAttribute( PDO::ATTR_PERSISTENT, true );
					$conn-> setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
				}catch(PDOException  $ex){
					die( "Connection failed: " . $ex-> getMessage() );
					}
					//return $conn;
			
		//$connex = new connection();
		//$connex->connect();

?>