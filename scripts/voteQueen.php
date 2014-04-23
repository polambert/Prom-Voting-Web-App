<?php
  
  //check the voteKing.php file if this needs to be explained.
  $name = $_REQUEST['name'];
	
  require 'connection.php';
		
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
  $vote = 'INSERT INTO resultsqueen '.' (name) '."VALUES('$name') ";
	
  mysql_select_db($databaseName);
	
  mysql_query($vote);
	
  header("Location: ../sub/voteKing.php");

?>
