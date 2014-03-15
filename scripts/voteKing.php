<?php
	$name = $_REQUEST['name'];
	
	require 'connection.php';
		
	$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
	$vote = 'INSERT INTO resultsking '.' (name) '."VALUES('$name') ";
	
	mysql_select_db($databaseName);
	
	mysql_query($vote);
	
	header("Location: ../sub/thanksNext.php");
?>