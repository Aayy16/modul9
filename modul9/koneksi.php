<?php
	$server		= "localhost";
	$username 	= "root";
	$password 	= "";
	$database 	= "db_praktek9";
	
	$conn = new mysqli($server, $username, $password, $database);
	
	if ($conn->connect_error)
	{
		die("koneksi database gagal:" .$conn->connect_error);
	}
 
?>