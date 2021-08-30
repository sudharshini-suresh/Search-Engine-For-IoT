<?php
	$conn = mysqli_connect('localhost', 'cfavouri_mirror', 'mirror948474', 'cfavouri_mirrordb') or die(mysqli_error());
	
	if(!$conn){
		die("Error: Failed to connect to database");
	}
?>


<!--$db_host = 'localhost';
		$db_user = 'cfavouri_mirror';
		$db_pass = 'mirror948474';
		$db_name = 'cfavouri_mirrordb';
		-->