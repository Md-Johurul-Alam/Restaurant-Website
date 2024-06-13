<?php
	
	define('LOCALHOST', 'localhost')
	define('DB_USERNAME', 'root');
	define('DB_PASSWORD', '');
	define('DB_NAME', 'restaurant html page');

	$conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysql_error())
	$db_select = mysqli_select_db($conn, DB_NAME) or die(mysql_error());
	

?>