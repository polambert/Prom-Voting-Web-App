<?php
  //getting the connection variables that i need
  require 'connection.php';
		
  //connecting to the database with a mysql command
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
  //select the correct prom database
  mysql_select_db($databaseName);

  mysql_query("DELETE FROM resultsqueen");
  
  mysql_query("DELETE FROM resultsking");

  header("Location: ../sub/admin.php");

?>
