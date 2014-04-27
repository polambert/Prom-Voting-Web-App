<?php
  $name = $_POST['name'];
	
  //getting the connection variables 
  require 'connection.php';
	
  /*connection variable is set to the connection command for the mysql datavase and
  the connection is made*/
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
	
  //the mysql command to insert the potential kings name into the database
  $insert = 'INSERT INTO promnames '.' (name) '."VALUES('$name')";
	
  //selecting the correct prom database on the server
  mysql_select_db($databaseName);
	
  //running the inserting command
  mysql_query($insert);
	
  //forwarding the user to the end page
  header("Location: ../sub/admin.php");
?>
