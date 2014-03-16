<?php
  //getting the connection variables that i need
	require 'connection.php';
		
  //connecting to the database with a mysql command
	$connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
  //select the correct prom database
	mysql_select_db($databaseName);
	
  //requesting the name that was sent from the name selection index page
	$name =$_REQUEST['name'];
	
  //running the query so the name can be deleted and not be shown again for voting
	mysql_query("DELETE FROM promnames WHERE name = '$name'");
	
  //redirecting to the queen voting page
	header("Location: ../sub/voteQueen.php");
?>