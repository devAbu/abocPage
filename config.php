<?php
	$hostname = "127.0.0.1";
	$username = "newuser";
	$pass = "password";
	$dataBaseName = "abocabout"; 
	$connection = mysqli_connect($hostname, $username, $pass);
	$selection = mysqli_select_db($connection, $dataBaseName);
	

?>
