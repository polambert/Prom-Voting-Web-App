<?php
  /*
    ALL CODE INCLUDED IS WRITTEN UNDER THE OPEN SOURCE SOFTWARE INTIATIVE, PLEASE
    USE THE CODE AS YOU WOULD LIKE. ALL CODE, GUI, IMAGES, AND OTHER DATA INCLUDED IN 
    THIS WEB APP IS OPEN SOURCE. CREATED BY: DAVID JOHNSON AND LYNN SMITH.*/
	
    //CODE STARTS BELOW HERE//

  */

  //check the voteKing.php file if this needs to be explained.
  $name = $_REQUEST['name'];
	
  require 'connection.php';
		
  $connection = mysql_connect($databaseHost,$databaseUser,$databasePassword);
		
  $vote = 'INSERT INTO resultsqueen '.' (name) '."VALUES('$name') ";
	
  mysql_select_db($databaseName);
	
  mysql_query($vote);
	
  header("Location: ../sub/voteKing.php");

?>
