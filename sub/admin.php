<?php
	include 'scripts/connection.php';
	$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
	mysql_select_db($databaseName);
?>