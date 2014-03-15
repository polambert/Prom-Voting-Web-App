<?php
	require 'connection.php';
		
	$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
	mysql_select_db($databaseName);
	
	$name =$_REQUEST['name'];
	
	mysql_query("DELETE FROM promnames WHERE name = '$name'");
	
	header("Location: ../sub/voteQueen.php");
?>